<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;



class ReviewController extends Controller
{

    public function index()
    {
        $data =  [
            'reviews_data' => Review::with(['company', 'reviewer'])->orderBy('created_at', 'desc')->get()
        ];
        return view('admin.review.index')->with($data);
    }


    public function approve($id, $status)
    {
        $review  = Review::find($id);
        $review->status = 1;

        if ($review->save()) {
            Session::flash('success', 'Review approved successful');
            return redirect(url('admin/review'));
        } else {
            Session::flash('error', 'Update successful');
            return redirect(url('admin/review'));
        }
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }
}