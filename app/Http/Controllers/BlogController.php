<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    public function index(){
        return view ('blog', [
            'title' => 'Blog',
            'posts' => Blog::all()
        ]);
    }

    public function show($slug){
        return view('blogDetail', [
            "title"=> "Judul",
            'post' => Blog::find($slug)
        ]);
    }
}
