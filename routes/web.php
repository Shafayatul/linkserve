<?php

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

/**
* Admin
*/
Route::get('/admin', 'PostController@adminHome')->middleware('auth.basic');
Route::get('/admin/addHomeBlock', 'PostController@adminAddHomeBlock')->middleware('auth.basic');
Route::post('/admin/storeHomeBlock', 'PostController@storeHomeBlock')->middleware('auth.basic');
Route::get('/admin/addPost/{type}', 'PostController@adminAddPost')->middleware('auth.basic');
Route::get('/admin/addMedia', 'PostController@adminAddMedia')->middleware('auth.basic');
Route::get('/admin/addSocialLink', 'PostController@adminAddHomeSocialLinks')->middleware('auth.basic');
Route::post('/admin/storeHomeSocialLinks', 'PostController@storeHomeSocialLinks')->middleware('auth.basic');
Route::get('/admin/singlePostType/{type}', 'PostController@adminShowSinglePostType')->middleware('auth.basic');
Route::post('/admin/deletePost', 'PostController@destroyById')->middleware('auth.basic');

/**
* Web
*/
Route::get('/', 'PostController@showHome');
Route::get('/posts/showMedia/{type}', 'PostController@showMedia');
Route::get('/posts/showPartnersClients/{id}', 'PostController@showPartnersClients');
Route::get('/posts/story/{id}', 'PostController@showStory');
Route::get('/posts/brand/{id}', 'PostController@showBrand');
Route::get('/posts/profile/{id}', 'PostController@showProfile');
Route::get('/posts/linkserve/{id}', 'PostController@showLinkserve');
Route::get('/posts/service/{id}', 'PostController@showService');
Route::get('/contact/{id}', 'PostController@showContact');
Route::get('/posts/single/{type}', 'PostController@showSinglePage');
Route::get('/single/{post_id}', 'PostController@showSinglePageUsingID');
Route::get('/galleries', 'PostController@showAllGallery');
Route::get('/downloads', 'PostController@showAllDownload');
Route::get('/download/{post_id}', 'PostController@showSingleDownloadUsingID');
Route::get('/gallery/{post_id}', 'PostController@showSingleGalleryUsingID');
Route::get('/search/{search}', 'PostController@showSearchResult');





/**
* Resources
*/
Route::resource('posts', 'PostController');
Route::resource('subscribes', 'SubscribeController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
