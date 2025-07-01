<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HobbieController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ChangePasswordController;

Route::get('/', function () {
    return Auth::user() ? redirect()->route('home') : view('landing');
})->name('login');

// Authenticate Routing
Route::get('login', [LoginController::class, 'getLogin']);
Route::post('login', [LoginController::class, 'postLogin']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/profile', function () {
    return view('profile');
});

// Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/delete-post/{id}', [AdminController::class, 'deletePost']);
    Route::post('/admin/delete-user/{id}', [AdminController::class, 'deleteUser']);
    Route::post('/admin/delete-comment/{id}', [AdminController::class, 'deleteComment']);
});

Route::get('/friend/{id}', [FriendController::class, 'index'])->name('friend');
Route::post('/getOldMessage', [ChatController::class, 'getOldMessage'])->name('get-old-message');
Route::post('/sendMessage', [ChatController::class, 'sendMessage'])->name('send-message');

Route::get('/photo/{id}', [PhotoController::class, 'index'])->name('photo');
Route::get('/video', fn() => view('video'));
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', fn() => view('about'));

Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile');
Route::get('/about/{id}', [AboutController::class, 'index'])->name('about');

Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');

Route::get('/profile/{id}/profile_update_info', [ProfileController::class, 'get_profile_update_info'])->name('get_profile_update_info');
Route::post('/profile/{id}/update_info', [ProfileController::class, 'profile_update_info'])->name('profile_update_info');

Route::get('/profile/{id}/hobbies_update_info', [HobbieController::class, 'get_hobbies_update_info'])->name('get_hobbies_update_info');
Route::post('/profile/{id}/hobbies_update_info', [HobbieController::class, 'hobbies_update_info'])->name('hobbies_update_info');

Route::get('/profile/{id}/friend_requests', [FriendController::class, 'get_request'])->name('friend_requests');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/profile/{id}/update_avatar', [ProfileController::class, 'update_avatar'])->name('update_avatar');
Route::post('/profile/{id}/update_header', [ProfileController::class, 'update_header'])->name('update_header');
Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::post('/friend/send_request', [FriendController::class, 'send_request']);
Route::post('/friend/process_request', [FriendController::class, 'process_request']);
Route::post('/friend/unfriend', [FriendController::class, 'unfriend']);

// Happy comment routes
Route::get('/newsfeed', [PostController::class, 'getPost'])->name('newsfeed');
Route::post('/newsfeed', [PostController::class, 'addPost'])->name('add-post');
Route::get('/delete-post/{pid}', [PostController::class, 'deletePost'])->name('delete-post');
Route::get('/edit-post/{pid}', [PostController::class, 'getEditPost'])->name('get-edit-post');
Route::post('/edit-post/{pid}', [PostController::class, 'editPost'])->name('edit-post');
Route::post('/like/{pid}', [LikeController::class, 'likePost'])->name('like');
Route::post('/comment/{pid}', [CommentController::class, 'addComment'])->name('comment');

// Change password
Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('get_change_password');
Route::post('change-password', [ChangePasswordController::class, 'changepassword']);
