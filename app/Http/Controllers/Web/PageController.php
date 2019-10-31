<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about()
    {
    	//$data =   [
           // 'categories' => Category::all(),
      //  ];

    	return view('web.page.about');
    }

    public function help()
    {
    	

    	return view('web.page.help');
    }

    public function contact()
    {
    	

    	return view('web.page.contact');
    }

    

    


	

}
