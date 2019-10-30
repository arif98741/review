<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{
   
    public function index()
    {
       
        $data =   [
            'categories' => Category::all(),
        ];

        return view('admin.category.index')->with($data);
    }

  
    public function create()
    {
        return view('admin.category.create');
    }

    
    public function store(Request $request)
    {
        Category::create( ['category_name' => $request->category_name]);
        Session::flash('success', 'Category inserted successful');
        return redirect(route('admin.category.index'));

    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit')->with(compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        
        if ($category->save()) {
            # code...
            Session::flash('success', 'Category updated successfully');
            return redirect(route('admin.category.index'));
        }else{
            Session::flash('error', 'Category update failed');
            return redirect(route('admin.category.index'));
        }
    }

    public function show()
    {
        Session::flash('success', 'Category deleted successfully');
        return redirect(route('admin.category.index'));
    }

    
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        if ($category->delete()) {
            # code...
            Session::flash('success', 'Category deleted successfully');
            return redirect(route('admin.category.index'));
        }else{
            Session::flash('error', 'Category deleted failed');
            return redirect(route('admin.category.index'));
        }
    }
}
