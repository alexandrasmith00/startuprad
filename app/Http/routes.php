<?php

Route::group(['middleware' => 'web'], function () {

    Route::auth();
    // feed and comments
    Route::get('/', 'FeedController@index');
    Route::post('/reply', ['as' => 'comments.reply', 'uses' => 'CommentsController@reply']);
    Route::post('/post', ['as' => 'posts.create', 'uses' => 'FeedController@createPost']);

    // user specific pages
    Route::controller('/account', 'UsersController');
    
    // anything to do with projects and ideas
    Route::get('/profile/updatesomething', 'EditsController@update');
    Route::group(['prefix' => 'project'], function () {
        Route::get('/', ['as' => 'messages', 'uses' => 'ProjectsController@index']);
        Route::post('/add', ['as' => 'messages.add', 'uses' => 'ProjectsController@add']);
        Route::get('{id}', ['as' => 'messages.show', 'uses' => 'ProjectsController@show']);
        Route::post('/update', ['as' => 'messages.add', 'uses' => 'ProjectsController@update']);
    });

});




