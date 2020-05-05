<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.static.index');
    }


    public function post($category, $slug) //urlden gelen category ve slug bilgisini aldık.
    {
        $lastPosts=Blog::orderBy('updated_at', 'desc')->take(4)->get();
        $blog=Blog::where('slug', $slug)->first(); //slug bilgisine göre (eşsiz olmalı) filtreme yaptık. tek bir blog bilgisini önyüze gönderdik.
        return view('frontend.blog.blogDetail', compact('blog', 'lastPosts'));
    }
}
