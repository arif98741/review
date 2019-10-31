<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewerController extends Controller
{
    public function row_listings_filterscol()
    {
    	return view('reviewer.row_listing.reviews');
    }
}
