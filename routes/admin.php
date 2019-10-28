<?php

/*sRoute::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');*/

Route::namespace('Admin')->group(function () { 
    Route::get('dashboard', 'AdminController@dashboard'); 
    Route::resource('category', 'CategoryController'); 
});