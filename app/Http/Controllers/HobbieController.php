<?php

namespace App\Http\Controllers;

use App\Models\Hobbie;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\messages;
use App\Models\Friend;


class HobbieController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function secure($id){
        $user = User::where('id', $id)->first();

        if ($user){
            $is_my_profile = (Auth::id() == $id)?true:false;
            if (!$is_my_profile){
                return false;
            }
            return true;
        }
        return false;
    }

//    public function index($id) {
//        if (!$this->secure($id)) return redirect('/404');
//        $user = User::where('id', $id)->first();
//        $hobbies_info = Hobbie::where('id', $user->hobbies_id)->first();
//        return $hobbies_info;
//    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'hobbie'=>'max:255',
            'movies'=>'max:255',
            'books'=>'max:255',
            'other'=>'max:255'
        ]);
    }

    protected function update(array $data, $user_id) {
        $id = User::where('id', $user_id)->first()->hobbies_id;
        Hobbie::where('id', $id)->first()->update([
            'hobbie'=>$data['hobbie'],
            'movies'=>$data['movies'],
            'books'=>$data['books'],
            'other'=>$data['other']
        ]);
    }

    public function get_hobbies_update_info() {
        $user = Auth::user();
        $profile = Profile::where('id', $user->profile_id)->first();
        $hobbies = Hobbie::where('id', $user->hobbies_id)->first();
        $listUser = User::with("profile")->where('id','!=',Auth::user()->id)->get();
        $listMess = messages::distinct()->with('profile')->with('user')->where('to',Auth::user()->id)->where('read_date',NULL)->get();
        // son bong add
        $id_friends = Friend::where('user_id_1', Auth::id())->where('allow', 0)->get();
        $friends = array();
        // $profile_friends = array();
        foreach($id_friends as $id_friend) {
            $friends[] = User::find($id_friend->user_id_2);
            // $profile_friends[] = Profile::find($id_friend->user_id_2);
        } 
        // end son bong add
        return view('hobbies_update_info', ['user' => $user, 'hobbies' => $hobbies, 'profile'=>$profile, 'listUser' => $listUser, 'listMess' => $listMess, 'friends'=>$friends]);
    }

    public function hobbies_update_info(Request $request, $id) {
        $allRequest  = $request->all();
        $validator = $this->validator($allRequest);
        $user = Auth::user();
        $profile = Profile::where('id', $user->profile_id)->first();
        $hobbies = Hobbie::where('id', $user->hobbies_id)->first();
        $listUser = User::with("profile")->where('id','!=',Auth::user()->id)->get();
        $listMess = messages::distinct()->with('profile')->with('user')->where('to',Auth::user()->id)->where('read_date',NULL)->get();
        // son bong add
        $id_friends = Friend::where('user_id_1', Auth::id())->where('allow', 0)->get();
        $friends = array();
        // $profile_friends = array();
        foreach($id_friends as $id_friend) {
            $friends[] = User::find($id_friend->user_id_2);
            // $profile_friends[] = Profile::find($id_friend->user_id_2);
        } 
        // end son bong add
        if ($validator->fails()) {
            return view('hobbies_update_info', ['user'=>$user, 'hobbies'=>Hobbie::find($hobbies->id), 'profile'=>$profile,'listUser' =>$listUser, 'listMess' => $listMess, 'friends'=>$friends])->withErrors($validator)->withInput();
        }
        else {
            $this->update($allRequest, $user->id);
            $status = "Cập nhật thông tin cá nhân thành công!";
            return view('hobbies_update_info', ['user'=>$user, 'hobbies'=>Hobbie::find($hobbies->id), 'profile'=>$profile, 'status'=>$status,'listUser' => $listUser, 'listMess' => $listMess, 'friends'=>$friends]);
        }
    }


}
