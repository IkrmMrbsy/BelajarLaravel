<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about
{
    private static $about_post = [
        [
        'image' => "/image/img1.png",
        'name' => "Ikram",
        'email' => "ikram@gmail.com",
        'bio' => "I am a Web Developer, I want to be a master in web developer"
        ],
        [
            'image' => "/image/img1.png",
            'name' => "Niko",
            'email' => "Niko@gmail.com",
            'bio' => "I am a Software Developer, i still learning with programming language (Java)"
        ]
];

    public static function all(){
        return collect(self::$about_post);
    }
}
