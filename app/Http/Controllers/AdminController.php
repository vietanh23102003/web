<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Posts;
use App\Models\Comments;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $posts = Posts::with('user', 'media')->latest()->get();
        $comments = Comments::with('user', 'post')->latest()->get();

        return view('admin.dashboard', compact('users', 'posts', 'comments'));
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete(); // sẽ tự xoá bài viết & bình luận nếu đã set cascade
        }
        return redirect()->back()->with('success', 'Đã xóa người dùng.');
    }
    public function deletePost($id)
    {
        $post = Posts::find($id);
        if ($post) {
            $post->delete();
        }
        return redirect()->back()->with('success', 'Xoá bài viết thành công');
    }
    public function deleteComment($id)
    {
        $comment = Comments::find($id);
        if ($comment) {
            $comment->delete();
        }
        return redirect()->back()->with('success', 'Đã xóa bình luận.');
    }
}



