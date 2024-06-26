<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug) {
        $post = Arr::first(Post::all(), function($post) use ($slug) {
            return $post['slug'] == $slug;
        });
        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Ardiansyah Sulistyo', 'title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
