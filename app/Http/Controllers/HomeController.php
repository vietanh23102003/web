<?php

namespace App\Http\Controllers;

use App\Models\Hobbie;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\messages;
use App\Models\Posts;
use App\Models\Medias;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;

class HomeController extends Controller
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

    public function index() {
        // if (!$this->secure($id)) return redirect('/404');
        $listUser = User::with("profile")->where('id','!=',Auth::user()->id)->get();
        $listMess = messages::distinct()->with('profile')->with('user')->where('to',Auth::user()->id)->where('read_date',NULL)->get();
        $user = User::with("profile")->whereId(Auth::user()->id)->first();
        $profile = Profile::find(Auth::user()->profile_id);
        // dd($profile->toArray(), $user->profile->toArray());
        $hobbies = Hobbie::find(Auth::user()->hobbies_id);
        $posts = Posts::orderBy('id','desc')->get();
        $photos = Medias::where('user_id', Auth::user()->id)->Where('type', 1)->get();
        // dd($posts);
        return view('newsfeed', compact('profile','user','hobbies','listUser','posts','listMess','photos'));
    }
	
	public function search(Request $request) {
		$listUser = User::with("profile")->where('id','!=',Auth::user()->id)->get();
        $listMess = messages::distinct()->with('profile')->with('user')->where('to',Auth::user()->id)->where('read_date',NULL)->get();

        $search = $request->input('search');
        if (empty($search)) return redirect()->back();

        $user = Auth::user();
        $profile = Profile::find($user->profile_id);
        $hobbie = Hobbie::find($user->profile_id);

        $user_result = User::where('first_name', 'like', '%'.$search.'%')->orWhere('last_name', 'like', '%'.$search.'%')->orderBy('first_name', 'ASC')->get();
        $profile_result = array();
        foreach ($user_result as $user_temp)
            $profile_result[] = Profile::find($user_temp->profile_id);
        $photos = Medias::where('user_id', Auth::user()->id)->Where('type', 1)->get();

        return view('search_result', ['user'=>$user, 'user_result'=>$user_result, 'profile'=>$profile, 'profile_result'=>$profile_result, 'search'=>$search, 'listUser'=>$listUser, 'listMess'=>$listMess, 'hobbies'=>$hobbie, 'photos'=>$photos]);

    }
}
