<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\BackSetting;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories=BlogCategory::all();
        return view('backend.blog.categories', compact('categories'));
    }

    public function createShow()
    {
        return view('backend.blog.newCategory');
    }

    public function create(Request $request)
    {
        $slug=Str::slug($request->title);
        $category =new BlogCategory();
        $category->title=$request->title;
        $category->keywords=$request->keywords;
        $category->description=$request->description;
        $category->slug=$slug;

        if ($category->save()){
            return   ['status'=>'success', 'title'=>'başarılı', 'message'=>'Kategori kaydedildi.'];

        }else{
            return ['status'=>'error', 'title'=>'başarısız', 'message'=>'Kategori kaydedildi.'];
        }
    }
}
