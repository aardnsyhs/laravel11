<?php
namespace App\Models;
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
}
