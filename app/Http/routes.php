<?php

Route::group(['middleware' => 'web'], function () {

    // routes that don't need authentication
    Route::get('/', 'PagesController@welcome');

//
    Route::get('feed', 'FeedController@index');
    
    Route::post('/reply', ['as' => 'comments.reply', 'uses' => 'CommentsController@reply']);

//    Route::get('blog/{slug}', 'BlogController@showPost');
//
//    
    // routes that need authentication
    Route::auth(); 
    Route::get('/dashboard', 'HomeController@index'); 
    Route::controller('/account', 'UsersController');
//    Route::controller('/project', 'ProjectsController');

    Route::get('/profile/updatesomething', 'EditsController@update');
    
    Route::group(['prefix' => 'project'], function () {
        Route::get('/', ['as' => 'messages', 'uses' => 'ProjectsController@index']);
        Route::post('/add', ['as' => 'messages.add', 'uses' => 'ProjectsController@add']);
        Route::get('{id}', ['as' => 'messages.show', 'uses' => 'ProjectsController@show']);
        Route::post('/update', ['as' => 'messages.add', 'uses' => 'ProjectsController@update']);

    });

});




