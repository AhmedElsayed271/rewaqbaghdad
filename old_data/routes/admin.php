<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {
    
    // Admin Auth
    Route::get('/auth', 'AuthAdminController@login');
    Route::post('/auth', 'AuthAdminController@check');
    Route::get('/logout', 'AuthAdminController@logout');
    Route::get('/forgot/password', 'AuthAdminController@ForgotPassword');
    Route::post('/forgot/password', 'AuthAdminController@SendPassword');
    
    // Admin Home
    Route::get('/home', 'AuthAdminController@home');

    // Error 403
    Route::get('/403', 'AuthAdminController@Error403');
    
    
    // Settings
    Route::get('/settings', 'SettingController@index');
    Route::post('/settings', 'SettingController@update');
    
    //Admins
    Route::get('/admins/json', 'AdminController@json');
    Route::resource('/admins', 'AdminController');

    //Groups
    Route::get('/groups/json', 'GroupController@json');
    Route::resource('/groups', 'GroupController');

    //Admin Profile
    Route::get('/profile', 'AdminController@profile');
    Route::post('/profile', 'AdminController@UpdateProfile');
    
    //Admin Backup
    Route::get('/backup', 'BackupController@index');
    Route::get('/backup/create', 'BackupController@create');
	Route::get('/backup/download/{file}', 'BackupController@download');
	Route::post('/backup/delete', 'BackupController@delete');
	Route::get('/db-restore/{file}', 'BackupController@restore');

    /////////

    // About
    Route::get('/about', 'AboutController@index');
    Route::post('/about', 'AboutController@update');

    // Center Team
    Route::post('/center-team/update/description', 'CenterteamController@UpdateDescription');
    Route::get('/center-team/json', 'CenterteamController@json');
    Route::resource('/center-team', 'CenterteamController');
    
    // Book Team
    Route::post('/book-team/update/description', 'BookteamController@UpdateDescription');
    Route::get('/book-team/json', 'BookteamController@json');
    Route::resource('/book-team', 'BookteamController');
    
    // Version categories
    Route::get('/version-categories/json', 'VersioncategoryController@json');
    Route::resource('/version-categories', 'VersioncategoryController');
    
    // Versions
    Route::get('/versions/json', 'VersionController@json');
    Route::resource('/versions', 'VersionController');
    
    // activity categories
    Route::get('/activity-categories/json', 'ActivitycategoryController@json');
    Route::resource('/activity-categories', 'ActivitycategoryController');
    
    // activities
    Route::get('/activities/json', 'ActivityController@json');
    Route::resource('/activities', 'ActivityController');
    
    
    // media news
    Route::get('/media-news/json', 'MedianewsController@json');
    Route::resource('/media-news', 'MedianewsController');
    
    // media Media photos
    Route::get('/media-photos/json', 'MediaphotoController@json');
    Route::resource('/media-photos', 'MediaphotoController');
    
    // media videos categories
    Route::get('/media-videos-categories/json', 'MediavideocategoryController@json');
    Route::resource('/media-videos-categories', 'MediavideocategoryController');
    
    // media videos
    Route::get('/media-videos/json', 'MediavideoController@json');
    Route::resource('/media-videos', 'MediavideoController');
    
    // Electronic services
    Route::get('/electronic-services/json', 'ElectronicserviceController@json');
    Route::resource('/electronic-services', 'ElectronicserviceController');
    
    
    // Electronic services
    Route::get('/newsletters/json', 'NewsletterController@json');
    Route::resource('/newsletters', 'NewsletterController');
    
    
    // Rewaq team
    Route::get('/rewaq-team/json', 'RewaqteamController@json');
    Route::resource('/rewaq-team', 'RewaqteamController');
    Route::get('/rewaq/publish/rule', 'RewaqpublishruleController@edit');
    Route::post('/rewaq/publish/rule', 'RewaqpublishruleController@update');
    
    //rewaq
    Route::get('/rewaq', 'RewaqController@edit');
    Route::post('/rewaq', 'RewaqController@update');
    
    //Parliament
    Route::get('/parliament', 'ParliamentController@edit');
    Route::post('/parliament', 'ParliamentController@update');
    
    // Parliament videos
    Route::get('/parliament-videos/json', 'ParliamentvideoController@json');
    Route::resource('/parliament-videos', 'ParliamentvideoController');

    // Rewaq Rewaqbook
    Route::get('/rewaq-books/json', 'RewaqbookController@json');
    Route::resource('/rewaq-books', 'RewaqbookController');
    
    
    // Iraq meter
    Route::get('/iraq-meter/json', 'IraqmeterController@json');
    Route::resource('/iraq-meter', 'IraqmeterController');
    
    
    // Magazine Team
    Route::get('/magazine-team/json', 'MagazineteamController@json');
    Route::resource('/magazine-team', 'MagazineteamController');
   
    // Magazine
    Route::get('/magazine', 'MagazineController@edit');
    Route::post('/magazine', 'MagazineController@update');
    Route::get('/magazine/publish/rule', 'MagazinerulesController@edit');
    Route::post('/magazine/publish/rule', 'MagazinerulesController@update');

    // Magazine Blog
    Route::get('/magazine-blog/json', 'MagazineblogController@json');
    Route::resource('/magazine-blog', 'MagazineblogController');
    
    // Events 
    Route::get('/events/json', 'EventsController@json');
    Route::resource('/events', 'EventsController');
    
    // Slider 
    Route::get('/slider/json', 'SliderController@json');
    Route::resource('/slider', 'SliderController');
    Route::post('/slider/getdata', 'SliderController@ajax');
    
}); // End Group Admin




