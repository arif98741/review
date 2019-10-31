<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function category_listing()
    {
    	return view('company.category_listing.top_company');
    }
}
