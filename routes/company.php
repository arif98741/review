<?php

Route::namespace('Company')->group(function () { 
    Route::get('category-companies-listing', 'CompanyController@category_listing'); 
    
});
