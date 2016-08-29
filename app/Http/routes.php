<?php

Route::group(['middleware' => 'web'], function () {


    // feed and comments
    Route::get('/', ['as' => 'feed', 'uses' => 'PagesController@index']);
    Route::post('/', ['as' => 'apply', 'uses' => 'PagesController@apply']);


    Route::get('/pdf', ['as' => 'feed', 'uses' => 'PagesController@pdf']);

    Route::get('/home', function() { return redirect()->route('feed'); });
    Route::get('/demoday', ['as' => 'demoday', 'uses' => 'PagesController@demo']);

    Route::post('/bugreport', ['as' => 'bug.create', 'uses' => 'FeedController@bugreport']);
    Route::post('addpost', ['as' => 'posts.create', 'uses' => 'FeedController@createPost']);
    Route::post('/update', 'ProjectsController@update');
    Route::post('/reply', ['as' => 'comments.reply', 'uses' => 'CommentsController@reply']);

    // update pieces of profile
    Route::auth();

    // user specific pages
    Route::controller('/account', 'UsersController');

    // anything to do with projects and ideas
    Route::group(['prefix' => 'project'], function () {
        Route::get('/', ['as' => 'messages', 'uses' => 'ProjectsController@index']);
        Route::post('/add', ['as' => 'messages.add', 'uses' => 'ProjectsController@add']);
        Route::get('{id}', ['as' => 'project.show', 'uses' => 'ProjectsController@show']);
    });

});




