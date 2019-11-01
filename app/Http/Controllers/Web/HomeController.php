<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class HomeController extends Controller
{
    public function index()
    {
    	$data =   [
            'categories' => Category::all(),
        ];

    	return view('web.home')->with($data);
    }

     public function company_landing()
    {
    	return view('company.companies.companies_landing');
    }

     public function row_listings()
    {
    	return view('reviewer.row_listing.row_list');
    }

    public function category_listing()
    {
    	return view('company.category_listing.top_company');
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
