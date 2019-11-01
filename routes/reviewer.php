<?php

Route::namespace('Reviewer')->group(function () { 
   
   Route::get('write-review','ReviewerController@write_review');
  
});
