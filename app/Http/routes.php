<?php

Route::group(['middleware' => 'web'], function () {

    // Home
    Route::get('/', ['as' => 'feed', 'uses' => 'PagesController@index']);

    // Feed
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'FeedController@index']);

    // Posts and comments
    Route::post('addpost', ['as' => 'posts.create', 'uses' => 'FeedController@createPost']);
    Route::post('/update', 'ProjectsController@update');
    Route::post('/reply', ['as' => 'comments.reply', 'uses' => 'CommentsController@reply']);

    // Developmental links
    Route::post('/bugreport', ['as' => 'bug.create', 'uses' => 'FeedController@bugreport']);

    // Application routes
    Route::post('/', ['as' => 'apply', 'uses' => 'PagesController@apply']); // can
    Route::get('/pdf', ['as' => 'feed', 'uses' => 'PagesController@pdf']);

    // User account pages
    Route::controller('/account', 'UsersController');

    // Projects pages
    Route::group(['prefix' => 'project'], function () {
        Route::get('/', ['as' => 'projects', 'uses' => 'ProjectsController@index']);
        Route::post('/add', ['as' => 'project.add', 'uses' => 'ProjectsController@add']);
        Route::get('{id}', ['as' => 'project.show', 'uses' => 'ProjectsController@show']);
    });

    // Login, resets, etc.
    Route::auth();

});




