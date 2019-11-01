
<?php

Route::get('/','Web\HomeController@index');
Route::get('/admin',function(){
  return redirect('admin/login');
});
Route::get('/reviewer',function(){
  return redirect('reviewer/login');
});

Route::get('/company',function(){
  return redirect('company/login');
});


// Blog Section
Route::namespace('Web')->group(function () { 

    Route::group(['prefix' => 'blog'],function(){
        Route::get('/','BlogController@index');
    });

    Route::get('about','PageController@about');
    Route::get('help','PageController@help');
    Route::get('contact','PageController@contact');
    Route::get('company/companies-landing', 'HomeController@company_landing');
    Route::get('reviewer/row-listing', 'HomeController@row_listings');
    Route::get('reviewer/reviews','HomeController@review');
    

    Route::get('company/category-companies-listing', 'HomeController@category_listing');

    


    Route::get('user-dashboard', 'HomeController@user_dashboard');

    
    
});



// auth routes start
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'Admin\Auth\LoginController@login');
  Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('logout');

  //Route::get('/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('register');
  //Route::post('/register', 'Admin\Auth\RegisterController@register');

  Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'reviewer'], function () {
  Route::get('/login', 'Reviewer\Auth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'Reviewer\Auth\LoginController@login');
  Route::post('/logout', 'Reviewer\Auth\LoginController@logout')->name('logout');

  Route::get('/register', 'Reviewer\Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'Reviewer\Auth\RegisterController@register');

  Route::post('/password/email', 'Reviewer\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'Reviewer\Auth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'Reviewer\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'Reviewer\Auth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'company'], function () {
  Route::get('/login', 'Company\Auth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'Company\Auth\LoginController@login');
  Route::post('/logout', 'Company\Auth\LoginController@logout')->name('logout');

  Route::get('/register', 'Company\Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'Company\Auth\RegisterController@register');

  Route::post('/password/email', 'Company\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'Company\Auth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'Company\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'Company\Auth\ResetPasswordController@showResetForm');
});

// auth routes end