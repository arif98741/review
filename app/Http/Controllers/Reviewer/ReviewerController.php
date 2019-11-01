<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewerController extends Controller
{
   function write_review()
   {
   		return view('reviewer.review.write_review');
   		
   }

   
}
