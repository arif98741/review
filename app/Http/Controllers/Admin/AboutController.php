<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\BlogPost;
use App\Models\Founder;
use Session;
use Image;

class AboutController extends Controller
{
    

    public function index()
    {
        $data =   [
            'founders' => Founder::all(),
       
        ];

        //return response()->json($data);
        return view('admin.founder.index')->with($data);
    }

    public function create()
    {
        return view('admin.founder.create');
    }

    public function store(Request $request)
    {
        $founder = new Founder;
        $founder->name = $request->name;
        $founder->designation = $request->designation;
        if ($request->hasFile('image')) {

            $founder->image = $this->uploadImage($request->file('image'));
        }

        if ($founder->save()) {
            Session::flash('success', 'Founder inserted successful');
            return redirect(route('admin.founder.index'));
        }else{
            Session::flash('success', 'Founder inserted successful');
            return redirect(route('admin.founder.index'));
        }  
    }

    public function edit($id)
    {
        $data =   [
            'founder' => Founder::find($id)
       
        ];
        return view('admin.founder.edit')->with($data);
    }

  
    public function update(Request $request, $id)
    {
        $founder = Founder::find($id);
        $founder->name = $request->name;
        $founder->designation = $request->designation;
        if ($request->hasFile('image')) {

            $founder->image = $this->updateImage($request->file('image'),$founder);
        }

        if ($founder->save()) {
            Session::flash('success', 'Founder updated successful');
            return redirect(route('admin.founder.index'));
        }else{
            Session::flash('success', 'Founder updated successful');
            return redirect(route('admin.founder.index'));
        }  
    }

    private function uploadImage($image)
    {
        $timestemp = time();
        $imageName = $timestemp . '.' . $image->getClientOriginalExtension();
        $path = public_path('storage/uploads/founder/') . 'founder_' . $imageName;
        Image::make($image)->save($path);
        return 'image_' . $imageName;
    }

    private function updateImage($image,$founder)
    {
        $founder_image = $founder->image;
        unlink(storage_path('app/public/uploads/founder/'.$founder_image));
        $timestemp = time();
        $imageName = $timestemp . '.' . $image->getClientOriginalExtension();
        $path = public_path('storage/uploads/founder/') . 'image_' . $imageName;
        Image::make($image)->save($path);
        return 'image_' . $imageName;
    }

    public function destroy($id)
    {
           $founder = Founder::findOrfail($id);

           if ($founder->delete()) {
            # code...
            Session::flash('success', 'Deleted successfully');
            return redirect(route('admin.founder.index'));
        }else{
            Session::flash('error', ' Delete failed');
            return redirect(route('admin.founder.index'));
        }
           
    }


}
