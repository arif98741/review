<?php

Route::namespace('Reviewer')->group(function () { 
   
   Route::get('write-review','ReviewController@write_review');
    
});
