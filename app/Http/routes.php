<?php

Route::group(['middleware' => 'web'], function () {

    // Onboarding routes
    Route::get('confirm/{token}', 'OnboardingController@confirm')->name('confirm');
    Route::post('confirm/{token}', 'OnboardingController@create')->name('create');
    Route::get('setup', 'OnboardingController@setup')->name('setup');

    // Student setup routes
    Route::post('student-step-one', 'OnboardingController@student-submit_one')->name('student-step-one');
    Route::post('student-step-two', 'OnboardingController@student-submit_two')->name('student-step-two');

    //  Pictures
    Route::post('upload-profile-pic', 'PictureController@profilePicture')->name('upload-profile-pic');
    Route::post('crop-profile-pic', 'PictureController@cropPicture')->name('crop-profile-pic');

    // Home
    Route::get('/', 'PagesController@index')->name('feed');

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

    // Invitations
    Route::get('/student-invite', 'OnboardingController@studentInvite')->name('student-invite');
    Route::post('/advisor-invite', 'OnboardingController@advisorInvite')->name('advisor-invite');

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




