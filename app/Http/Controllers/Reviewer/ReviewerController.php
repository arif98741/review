<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Reviewer;
use Session;
use Storage;
use Auth;


class ReviewerController extends Controller
{
   	function write_review()
   	{
   		return view('reviewer.review.write_review');
   	}

   	public function review()
    {

    	return view('reviewer.review.reviews');
    }


    public function setting(Request $request)
    {

      if ($request->isMethod('put')) {
        //dd($request->all()) ;

        $reviewer =  Reviewer::find(Auth::guard('reviewer')->user()->id);
        $reviewer->title = $request->title;
        $reviewer->fullname = $request->fullname;
        $reviewer->email = $request->email;
        $reviewer->city = $request->city;
        $reviewer->country_id = $request->country_id;

        if (!empty($request->file('image'))) {

          if (file_exists("public/uploads/reviewer/".$reviewer->image)) {
            Storage::delete("public/uploads/reviewer/".$reviewer->image);
          }

          $filenameWithExt = $request->file('image')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          $extension = $request->file('image')->getClientOriginalExtension();
          $fileNameToStore = 'reviewer'.'_'.time().'.'.$extension;
          $path = $request->file('image')->storeAs('public/uploads/reviewer', $fileNameToStore);
          $reviewer->image =  str_replace("public/uploads/reviewer/", '', $path);
        }

        if($reviewer->save())
        {
          Session::flash('success', 'Setting updated successfully');
          return redirect(url('reviewer/setting'));
        }
        
      }
      
      $data = [
        'reviewer' => Reviewer::with('country')->where('id',Auth::guard('reviewer')->user()->id)->first(),
        'countries' => Country::all()
      ];

        //dd($data['reviewer']) ;
      
    	return view('reviewer.setting')->with($data);
    }
}
