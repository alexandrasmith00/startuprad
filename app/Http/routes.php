<?php

Route::group(['middleware' => 'web'], function () {

    // routes that don't need authentication
    Route::get('/', 'PagesController@welcome');

//
//    Route::get('blog', 'BlogController@index');
//    Route::get('blog/{slug}', 'BlogController@showPost');
//
//    
    // routes that need authentication
    Route::auth(); 
    Route::get('/dashboard', 'HomeController@index'); 
    Route::controller('/account', 'UsersController');
    Route::controller('/project', 'ProjectsController');


});




