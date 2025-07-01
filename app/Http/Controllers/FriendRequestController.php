<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\messages;
use Illuminate\Http\Request;

class FriendRequestController extends Controller
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
    public function index($id){
        $listUser = User::with("profile")->where('id','!=',Auth::user()->id)->get();
        $listMess = messages::distinct()->with('profile')->with('user')->where('to',Auth::user()->id)->where('read_date',NULL)->get();
        $user = Auth::user();
        $profile = Profile::where('id', $user->id)->first();
        return view('friend_requests', ['user' => $user, 'profile' => $profile, 'listuser'=>$listUser,'listMess'=>$listMess]);
    }
}
