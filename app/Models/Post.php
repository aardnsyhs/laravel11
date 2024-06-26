<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
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
        ];
    }

    public static function find($slug): array {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if(!$post) abort(404);
        return $post;
    }
}
