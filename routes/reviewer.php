<?php

Route::namespace('Reviewer')->group(function () { 
   
   Route::get('write-review','ReviewerController@write_review');
   Route::match(['get','put'],'setting','ReviewerController@setting');
   Route::match(['get','post'],'review_now/{id}','ReviewerController@review_now')->where('id', '[0-9]+');;
});
