<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::pattern('tag', '.*');

Route::group(['namespace' => 'Front'], function(){
    Route::get('/', 'IndexController@index');
    Route::get('/search', 'IndexController@search');

    Route::post('/get/writer/version', 'AjaxController@getWriterVersion');

    Route::get('/event/{tag}', 'IndexController@ShowEvent');

    Route::post('/get/events', 'IndexController@GetEvents');
    Route::get('/contact-us', 'AboutController@ContactUs');
    Route::post('/contact-us', 'AboutController@sendMail');

    Route::get('/about-us', 'AboutController@AboutUs');
    Route::get('/employee/center', 'AboutController@EmployeeCenter');
    Route::get('/center/writers', 'AboutController@CenterWriters');
    
    
    Route::get('/versions/category/{slug}', 'VersionController@category');
    Route::get('/version/tag/{tag}', 'VersionController@Tag');
    Route::get('/versions', 'VersionController@All');
    Route::get('/version/{slug}', 'VersionController@SingleVersion');


    Route::get('/activities/category/{slug}', 'ActivityController@category');
    Route::get('/activities/tag/{tag}', 'ActivityController@Tag');
    Route::get('/activities', 'ActivityController@All');
    Route::get('/activity/{slug}', 'ActivityController@SingleActivity');
    

    Route::get('/rewaq', 'RewaqController@index');
    Route::get('/rewaq/book/{slug}', 'RewaqController@book');
    Route::get('/rewaq/book/tag/{tag}', 'RewaqController@Tag');
    
    Route::get('/rewaq/publish/role', 'RewaqController@PublishRole');
    Route::get('/rewaq/editorial-board', 'RewaqController@EditorialBoard');
    Route::get('/rewaq/contact-us', 'RewaqController@contact');
    Route::post('/rewaq/contact-us', 'RewaqController@sendMail');

    Route::get('/magazine', 'MagazineController@index');
    Route::get('/magazine/blog/{slug}', 'MagazineController@SingleMagazine');
    Route::get('/magazine/tag/{tag}', 'MagazineController@Tag');
    Route::get('/magazine/publish/role', 'MagazineController@PublishRole');
    Route::get('/magazine/editorial-board', 'MagazineController@EditorialBoard');
    Route::get('/magazine/contact-us', 'MagazineController@contact');
    Route::post('/magazine/contact-us', 'MagazineController@sendMail');

    Route::get('/khetab-magazine', 'KhetabMagazineController@index');
    Route::get('/khetab-magazine/blog/{slug}', 'KhetabMagazineController@SingleMagazine');
    Route::get('/khetab-magazine/tag/{tag}', 'KhetabMagazineController@Tag');
    Route::get('/khetab-magazine/publish/role', 'KhetabMagazineController@PublishRole');
    Route::get('/khetab-magazine/editorial-board', 'KhetabMagazineController@EditorialBoard');
    Route::get('/khetab-magazine/contact-us', 'KhetabMagazineController@contact');
    Route::post('/khetab-magazine/contact-us', 'KhetabMagazineController@sendMail');

    Route::get('/MEJEELP-magazine', 'MEJEELPController@index');
    Route::get('/MEJEELP-magazine/blog/{slug}', 'MEJEELPController@SingleMagazine');
    Route::get('/MEJEELP-magazine/tag/{tag}', 'MEJEELPController@Tag');
    Route::get('/MEJEELP-magazine/publish/role', 'MEJEELPController@PublishRole');
    Route::get('/MEJEELP-magazine/editorial-board', 'MEJEELPController@EditorialBoard');
    Route::get('/MEJEELP-magazine/contact-us', 'MEJEELPController@contact');
    Route::post('/MEJEELP-magazine/contact-us', 'MEJEELPController@sendMail');


    Route::get('/parliament', 'ParliamentController@index');

   
    Route::get('/kon-media/center/news', 'KonMediaController@news');
    Route::get('/kon-media/center/news/{slug}', 'KonMediaController@SingleNews');
    Route::get('/kon-media/center/news/tag/{tag}', 'KonMediaController@Tag');
    
    
    Route::get('/iraq/meter', 'IraqmeterController@Info');
    Route::get('/iraq/meter/blogs', 'IraqmeterController@blogs');
    Route::get('/iraq/meter/{slug}', 'IraqmeterController@SingleBlog');
    Route::get('/iraq/meter/tag/{tag}', 'IraqmeterController@Tag');
    
    
    Route::get('/boadcast', 'IraqmeterController@boadcast');
    Route::get('/boadcast/details', 'IraqmeterController@boadcastDetails');
    
    Route::get('/kon', 'IraqmeterController@kon');


    Route::get('/media/center/news', 'MediacenterController@news');
    Route::get('/media/center/news/{slug}', 'MediacenterController@SingleNews');
    Route::get('/media/center/news/tag/{tag}', 'MediacenterController@Tag');


    Route::get('/media/center/gallery', 'MediacenterController@Gallery');
    Route::get('/media/center/videos', 'MediacenterController@videos');
    
    
    Route::get('/visit-center', 'ElectronicController@VisitCenter');
    Route::post('/visit-center', 'ElectronicController@VisitCenterSendMail');
    
    Route::get('/request-survey', 'ElectronicController@RequestSurvey');
    Route::post('/request-survey', 'ElectronicController@RequestSurveySendMail');
    
    Route::get('/request-host-event', 'ElectronicController@RequestHost');
    Route::post('/request-host-event', 'ElectronicController@RequestHostSendMail');
    
    Route::get('/membership-request', 'ElectronicController@MembershipRequest');
    Route::post('/membership-request', 'ElectronicController@MembershipRequestSendMail');
    
    Route::get('/request-invitation', 'ElectronicController@RequestInvitation');
    Route::post('/request-invitation', 'ElectronicController@RequestInvitationSendMail');
    
});



Route::post('/subscription', 'Front\IndexController@subscription');
Route::get('/active/subscription', 'Admin\NewsletterController@active');

Route::group(['prefix' => 'filemanager', 'middleware'=>'authadmin:filemanager_show'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
