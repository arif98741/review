<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Company;
use App\Models\Reviewer;
use App\Models\Review;
use App\Models\Package;
use Session;



class HomeController extends Controller
{
    public function index()
    {
    	$data =   [
            'categories' => Category::all(),
            'reviews_data'=> Review::with(['company','reviewer'])->orderBy('created_at','desc')->limit(12)->get()
        ];
      //  return $data['reviews_data'];

    	return view('web.home')->with($data);
    }


    public function company_landing()
    {
        
    	return view('company.companies.companies_landing');
    }


    public function pricing()
    {
        
        $data =   [
             'standards' => Package::where(['type'=>'standard'])->limit(3)->get(),
             'extendeds' => Package::where(['type'=>'extended'])->limit(3)->get(),
             'premiums' => Package::where(['type'=>'premium'])->limit(3)->get()
         ];

        return view('company.companies.pricing')->with($data);
    }



     public function row_listings()
    {
    	return view('reviewer.row_listing.row_list');
    }


    public function category_listing()
    {

         $data =   [
            'companies' => Company::all(),
        ];
       // return response()->json($data);

    	return view('company.category_listing.top_company')->with($data);
    }


     public function user_dashboard()
    {
    	return view('profile.user_dashboard');
    }



      public function review()
    {

        return view('reviewer.review.reviews');
    }



}
