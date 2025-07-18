<?php

namespace App\Http\Controllers;

use App\Models\Hobbie;
use App\Models\Medias;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\messages;
use App\Models\Profile;
use App\Models\Friend;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    //
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

    public function index($id) {
        if (!$this->secure($id)) return redirect('/404');
        $listUser = User::with("profile")->where('id','!=',Auth::user()->id)->get();
        $listMess = messages::distinct()->with('profile')->with('user')->where('to',Auth::user()->id)->where('read_date',NULL)->get();
        $user = User::where('id', $id)->first();
        $profile = Profile::find($user->profile_id);
        $hobbies = Hobbie::where('id', $user->hobbies_id)->first();
        $posts = Posts::orderBy('id','desc')->get();
        // son bong add
        $id_friends = Friend::where('user_id_1', Auth::id())->where('allow', 0)->get();
        $friends = array();
        // $profile_friends = array();
        foreach($id_friends as $id_friend) {
            $friends[] = User::find($id_friend->user_id_2);
            // $profile_friends[] = Profile::find($id_friend->user_id_2);
        } 
        // end son bong add
        $photos = Medias::where('user_id', $id)->Where('type', 1)->get();
        return view('profile', ['profile'=>$profile, 'user'=>$user,  'hobbies'=>$hobbies, 'listUser'=>$listUser,'listMess'=>$listMess, 'posts'=>$posts, 'friends'=>$friends, 'photos'=>$photos]);
    }

    public function get_profile_update_info($id){
        $listUser = User::with("profile")->where('id','!=',Auth::user()->id)->get();
        $listMess = messages::distinct()->with('profile')->with('user')->where('to',Auth::user()->id)->where('read_date',NULL)->get();
        $user = Auth::user();
        $profile = Profile::find($user->profile_id);

        // son bong add
        $id_friends = Friend::where('user_id_1', Auth::id())->where('allow', 0)->get();
        $friends = array();
        // $profile_friends = array();
        foreach($id_friends as $id_friend) {
            $friends[] = User::find($id_friend->user_id_2);
            // $profile_friends[] = Profile::find($id_friend->user_id_2);
        } 
        // end son bong add
        return view('profile_update_info', ['user' => $user, 'profile' => $profile, 'listUser' => $listUser, 'listMess' => $listMess, 'friends'=>$friends]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function update(array $data, $id) {
    $user = User::find($id);
    $user->update([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
    ]);

    $profile = Profile::find($user->profile_id);
    if ($profile) {
        $profile->update([
            'about_me' => $data['about_me'] ?? null,
            'birth_date' => $data['birth_date'] ?? null,
            'address' => $data['address'] ?? null,
            'gender' => ($data['gender'] ?? 'MA') == 'MA' ? 0 : 1,
            'phone' => $data['phone'] ?? null,
            'status' => ($data['status'] ?? 'Single') == 'Married' ? 1 : 0,
        ]);
    }
}


    public function profile_update_info(Request $request, $id){
        $allRequest  = $request->all();
        $validator = $this->validator($allRequest);
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
            // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
            return view('profile_update_info', ['user' => Auth::user(), 'profile' => Profile::find(Auth::user()->profile_id), 'listUser' => $listUser, 'listMess' => $listMess])->withErrors($validator)->withInput();
        } else {
            // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
            $this->update($allRequest, $id);
            // Insert thành công sẽ hiển thị thông báo
            $status = "Cập nhật thông tin cá nhân thành công!";
            return view('profile_update_info', ['user' => Auth::user(), 'profile' => Profile::find(Auth::user()->profile_id), 'status' => $status,'listUser' => $listUser, 'listMess' => $listMess, 'friends'=>$friends]);
        }
    }

    public function update_avatar(Request $request, $id) {
        $messages = [
            'avatar.required' => trans('validation.required'),
            'avatar.mimes' => trans('validation.mimes'),
            'avatar.max.file' => trans('validation.max.file'),
        ];
        $validator = Validator::make(['avatar' => $request->file('avatar')], [
            'avatar' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->route('profile', ['user' => Auth::user()])->withErrors($validator)->withInput();
        }
        else {
            $image = $request->file('avatar');
            // $img = Image::make($img)->resize(36,36);
            $file_name = md5(uniqid() . time()) . '.' . $image->getClientOriginalExtension();
            if ($image->storeAs('img/avatar', $file_name)) {
                $user = User::where('id', $id)->first();
                $profile = Profile::find($user->profile_id);
                $profile->avatar_path = 'img/avatar/'.$file_name;
                $profile->save();
                return redirect()->route('profile', ['id' => Auth::id(), 'status' => 'Success']);
            }
            else {
                return redirect()->route('profile', ['id' => Auth::id(), 'status' => 'Failed']);
            }
        }
    }

    public function update_header(Request $request, $id) {
        $messages = [
            'header.required' => trans('validation.required'),
            'header.mimes' => trans('validation.mimes'),
            'header.max.file' => trans('validation.max.file'),
        ];
        $validator = Validator::make(['header' => $request->file('header')], [
            'header' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->route('profile', ['user' => Auth::user()])->withErrors($validator)->withInput();
        }
        else {
            $image = $request->file('header');
            // $img = Image::make($img)->resize(36,36);
            $file_name = md5(uniqid() . time()) . '.' . $image->getClientOriginalExtension();
            if ($image->storeAs('img/header', $file_name)) {
                $user = User::where('id', $id)->first();
                $profile = Profile::find($user->profile_id);
                $profile->header_path = 'img/header/'.$file_name;
                $profile->save();
                return redirect()->route('profile', ['id' => Auth::id(), 'status' => 'Success']);
            }
            else {
                return redirect()->route('profile', ['id' => Auth::id(), 'status' => 'Failed']);
            }
        }
    }
}
