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
    Route::resource('package', 'PackageController'); 
    Route::resource('blog_category', 'BlogcategoryController'); 
    Route::resource('blog', 'BlogPostController');
    Route::resource('founder', 'AboutController'); 
    Route::get('company/status/{status}/{id}','CompanyController@update_status');
    Route::resource('company', 'CompanyController'); 

});