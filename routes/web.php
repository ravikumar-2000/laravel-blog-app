<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('posts', [
        "posts" => Post::latest()->get(),
    ]);
});

Route::get('/post/{post_id}', function ($id) {
    return view('post', [
        'post' => Post::find($id)
    ]);
});

Route::get('/categories/{category:category_name}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('/user/{user:username}', function (User $user) {
    return view('posts', [
        "posts" => $user->posts,
    ]);
});


?>