<?php

Route::group(['middleware' => 'web'], function () {

    // Testing routes
    Route::get('test-as/{id}', 'UsersController@testAs')->name('test-as');

    // Onboarding routes
    Route::get('confirm/{token}', 'OnboardingController@confirm')->name('confirm');
    Route::post('confirm/{token}', 'OnboardingController@create')->name('create');
    Route::get('setup', 'OnboardingController@setup')->name('setup');

    // Student setup routes
    Route::post('student-step-one', 'OnboardingController@student_submit_one')->name('student-step-one');
    Route::post('student-step-two', 'OnboardingController@student_submit_two')->name('student-step-two');

    //  Pictures
    Route::post('upload-profile-pic', 'PictureController@profilePicture')->name('upload-profile-pic');
    Route::post('crop-profile-pic', 'PictureController@cropPicture')->name('crop-profile-pic');

    // Home
    Route::get('/', 'PagesController@index')->name('feed');

    // Feed
    Route::get('/dashboard', 'FeedController@index')->name('dashboard');
    Route::get('/profile', 'UsersController@myProfile')->name('my-profile');
    Route::get('/profile/{id}', 'UsersController@profile')->name('profile');

    // Editing profile
    Route::get('/edit-profile', 'ProjectsController@editProfile')->name('edit-profile');
    Route::get('/edit-profile/general', 'ProjectsController@editGeneral')->name('edit-general');
    Route::post('/edit-profile/general', 'ProjectsController@updateGeneral')->name('update-general');
    Route::get('/edit-profile/social', 'ProjectsController@editSocial')->name('edit-social');
    Route::post('/edit-profile/social', 'ProjectsController@updateSocial')->name('update-social');
    Route::get('/edit-profile/team', 'ProjectsController@editTeam')->name('edit-team');
    Route::post('/edit-profile/team', 'ProjectsController@updateTeam')->name('update-team');
    Route::get('/edit-profile/organization', 'ProjectsController@editOrganization')->name('edit-organization');
    Route::post('/edit-profile/organization', 'ProjectsController@updateOrganization')->name('update-organization');
    Route::get('/edit-profile/value-chain', 'ProjectsController@editValue')->name('edit-value');
    Route::post('/edit-profile/value-chain', 'ProjectsController@updateValue')->name('update-value');
    Route::get('/edit-profile/strategy', 'ProjectsController@editStrategy')->name('edit-strategy');
    Route::post('/edit-profile/strategy', 'ProjectsController@updateStrategy')->name('update-strategy');
    Route::get('/edit-profile/logo', 'ProjectsController@editLogo')->name('edit-logo');

    // Posts and comments
    Route::post('addpost', ['as' => 'posts.create', 'uses' => 'FeedController@createPost']);
    Route::post('/update', 'ProjectsController@update');
    Route::post('/reply', ['as' => 'comments.reply', 'uses' => 'CommentsController@reply']);

    // User settings
    Route::get('/settings', 'UsersController@settings')->name('settings');
    Route::get('/settings/password', 'UsersController@password')->name('change-password');
    Route::post('/settings/password', 'UsersController@updatePassword')->name('update-password');
    Route::post('/settings', 'UsersController@updateSettings')->name('update-settings');

    // Admin controllers
    Route::get('/manage-rad', 'RADController@manageRad')->name('manage-rad');
    Route::post('/manage-rad', 'RADController@addTF')->name('add-tf');
    Route::get('/manage-cohorts', 'RADController@manageCohorts')->name('manage-cohorts');
    Route::post('/manage-cohorts', 'RADController@addTeam')->name('add-team');

    // Developmental links
    Route::post('/bugreport', 'FeedController@bugreport')->name('bug.create');

    // Application routes
    Route::post('/', ['as' => 'apply', 'uses' => 'PagesController@apply']); // can
//    Route::get('/pdf', ['as' => 'feed', 'uses' => 'PagesController@pdf']);

    // Invitations
    Route::get('/sending-student-invites', 'OnboardingController@sending')->name('sending-student-invites');
    Route::get('/student-invite', 'OnboardingController@studentInvite')->name('student-invite');
    Route::get('/returning-student-invite', 'OnboardingController@returningStudentInvite')->name('return-student-invite');
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




