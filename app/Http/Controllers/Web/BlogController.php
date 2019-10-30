<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    
    public function index()
    {
        $data =   [
            'blogs' => BlogPost::with (['blog_category'])->orderBy('id','desc')->get(),
            'latest_blogs' => BlogPost::inRandomOrder()->with(['blog_category'])->limit(3)->get(),
            'blog_categories' => BlogCategory::all(),
        ];

       // return dd($data);
        return view('web.blog.index')->with($data);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
