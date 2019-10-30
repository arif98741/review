<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Session;
use Image;

class BlogPostController extends Controller
{
   
     public function index()
    {
        $data =   [
            'blogs' => BlogPost::with(['blog_category'])->get(),
       
        ];
        return view('admin.blog.index')->with($data);
    }

   
    public function create()
    {
        $data =   [
            'blog_categories' => BlogCategory::orderBy('name','asc')->get(),
       
        ];
        return view('admin.blog.create')->with($data);
    }

    public function store(Request $request)
    {
       // dd($request->all())
        $blog = new BlogPost;
        $blog->title = $request->title;
        $blog->blog_category_id = $request->blog_category_id;
        $blog->description = $request->description;

         if ($request->hasFile('image')) {

            $blog->image = $this->uploadImage($request->file('image'));
        }

        if (BlogPost::save()) {
            Session::flash('success', 'Category inserted successful');
            return redirect(route('admin.blog.index'));
        }else{
            Session::flash('success', 'Category inserted successful');
            return redirect(route('admin.blog.index'));
        }  
    }


    public function edit($id)
    {
        $category = BlogPost::find($id);
        return view('admin.blog.edit')->with(compact('category'));
    }

  
    public function update(Request $request, $id)
    {
        $blog = BlogPost::find($id);
        $blog->name = $request->name;
        
        if ($blog->save()) {
            # code...
            Session::flash('success', 'Post updated successfully');
            return redirect(route('admin.blog.index'));
        }else{
            Session::flash('error', 'Post update failed');
            return redirect(route('admin.blog.index'));
        }
    }

  
    public function destroy($id)
    {
        $blog = BlogPost::find($id);
        $blog->delete();
        if ($blog->delete()) {
            # code...
            Session::flash('success', 'Blog deleted successfully');
            return redirect(route('admin.blog.index'));
        }else{
            Session::flash('error', 'Blog deleted failed');
            return redirect(route('admin.blog.index'));
        }
    }

    private function uploadImage($image)
    {
        $timestemp = time();
        $imageName = $timestemp . '.' . $image->getClientOriginalExtension();
        $path = public_path('storage/uploads/admin/blog/') . 'image_' . $imageName;
        Image::make($image)->save($path);
        return 'image_' . $imageName;
    }

}
