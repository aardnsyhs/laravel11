<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Ardiansyah Sulistyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A distinctio iste, possimus
            corrupti molestiae repudiandae dolorem maxime incidunt nemo tempora saepe sequi temporibus voluptatum ad omnis placeat et in
            iusto!'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Ardiansyah Sulistyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi officia eum porro,
            reiciendis, voluptatum dolorum perspiciatis, ratione quos omnis culpa alias facere! Quam voluptas hic, harum
            delectus labore soluta ratione!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Ardiansyah Sulistyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A distinctio iste, possimus corrupti molestiae repudiandae dolorem maxime incidunt nemo tempora saepe sequi temporibus voluptatum ad omnis placeat et in iusto!'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Ardiansyah Sulistyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi officia eum porro, reiciendis, voluptatum dolorum perspiciatis, ratione quos omnis culpa alias facere! Quam voluptas hic, harum delectus labore soluta ratione!'
        ]
        ];

        $post = Arr::first($posts, function($post) use ($slug) {
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
