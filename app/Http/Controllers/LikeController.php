<?php
#use App\shift_master_models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Posts;
use App\Models\Likes;

class LikeController extends Controller
{

    public function likePost($pid){

    		
            $user_id = Auth::id();
            $index = 0;
            $likes = Likes::where('post_id', $pid)->get();
            $avatar = "";
            foreach($likes as $like){
                if($like->user_id==$user_id){
                    $index = 1; 
                    $like->delete();
                    break; 
                }
            }

            if($index == 0){
                $like = new Likes;
                $like->post_id = $pid;
                
                $like->user_id = $user_id;
                $like->save();
                $avatar = Auth::user()->profile ? Auth::user()->profile->avatar_path : null;
            }

            $numb = Posts::find($pid)->likes->count();
            $data =['numb'=>$numb, 'index'=>$index, 'avatar'=>$avatar, 'uid'=>$user_id];
            dd($data);
            return response()->json($data);
            
     }
}
