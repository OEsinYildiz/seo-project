<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index()
    {
        $blogs=Blog::all();
        return view('backend.blog.blog-list', compact('blogs'));
    }

    public function createShow()
    {
        $categories=BlogCategory::all();
        return view('backend.blog.newPost', compact('categories'));
    }

    public function create(Request $request)
    {
        $file=null;
        if ($request->file('coverImage') != null){
            $file=Storage::disk('public')->putFile('blogs',$request->file('coverImage'));
        }
        $slug=Str::slug($request->title, '-');
        $blog = new Blog();

        $blog->title=$request->title;
        $blog->keywords=$request->keywords;
        $blog->description=$request->description;
        $blog->content=$request->get('content');
        $blog->slug=$slug;
        $blog->category_id=$request->blogCategory;
        $blog->cover_image=$file;

        if ($blog->save()){
            return  ['status'=>'success', 'title'=>'Başarılı', 'message'=>'Blog Eklendi'];
        }
        return  ['status'=>'error', 'title'=>'başarısız', 'message'=>'Blog eklenemedi'];
    }


}
