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
}
