<?php

namespace App\Models;

class Blog
{
    private static $blog_posts = [
        [
            'title' => "How to be a Good Programmer",
            'slug' => "Judul-post-pertama",
            'image' => "/image/img1.png",
            'author' => "Ikram",
            'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus cupiditate harum fuga perferendis dolores distinctio nam magnam dignissimos, ex nihil sapiente rem nemo esse enim ratione sed quae aut? Voluptatibus modi iusto beatae, itaque eum, vero aliquam asperiores illo dicta sapiente facere, nisi eos aliquid facilis earum fugiat labore voluptatem"
        ],
        [
            'title' => "Can You Help Me?",
            'slug' => "Judul-post-kedua",
            'image' => "/image/img1.png",
            'author' => "Niko",
            'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus cupiditate har"
        ],
        [
            'title' => "Hello World",
            'slug' => "Judul-post-ketiga",
            'image' => "/image/img1.png",
            'author' => "Ridho",
            'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde perspiciatis illo eum earum blanditiis nam quod natus provident laboriosam iusto voluptate omnis nostrum, itaque doloremque quas commodi iure quae, aperiam, impedit nihil harum? Cum est expedita, perspiciatis necessitatibus rem dolor quia veritatis quasi doloribus ab?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $blogs= static::all();
        return $blogs->firstWhere('slug', $slug);
    }
}
