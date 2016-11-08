<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
|--------------------------------------------------------------------------
| Visitors Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', ['as'=>'home','uses'=>'PagesController@index']);
Route::get('/objave', ['as'=>'posts', 'uses'=>'PagesController@posts']);

Route::get('/about', ['as'=>'about','uses'=>'PagesController@about']);
Route::get('/contact', ['as'=>'contact', 'uses'=>'PagesController@contact']);

Route::get('/post/{slug}', ['as'=>'show_post', 'uses'=>'PagesController@showPost']);



/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();

Route::get('/logout', function(){

	Auth::logout();

	return redirect()->route('home');
})->name('logout');

Route::get('/admin', function(){

	if(Auth::check()){
		return redirect()->route('posts.index');	
	}

	return redirect()->route('login');
});


/*
|--------------------------------------------------------------------------
| Admin Posts Routes
|--------------------------------------------------------------------------
|
*/

Route::resource('/admin/posts', 'Admin\AdminPostsController');

/*
|--------------------------------------------------------------------------
| Admin Categories Routes
|--------------------------------------------------------------------------
|
*/

Route::resource('/admin/categories', 'Admin\AdminCategoriesController');

/*
|--------------------------------------------------------------------------
| Admin Tags Routes
|--------------------------------------------------------------------------
|
*/

Route::resource('/admin/tags', 'Admin\AdminTagsController');

/*
|--------------------------------------------------------------------------
| Admin About Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/admin/about/create', ['as'=>'about.create', 'uses'=> 'Admin\AdminAboutController@indexCreate']);

Route::post('/admin/about/create', ['as'=>'about.create', 'uses'=> 'Admin\AdminAboutController@create']);

Route::post('/admin/about/createSecond', ['as'=>'about.createSecond', 'uses'=> 'Admin\AdminAboutController@createSecond']);

Route::get('/admin/about/edit', ['as'=>'about.edit', 'uses'=>'Admin\AdminAboutController@indexEdit']);

Route::post('/admin/about/edit', ['as'=>'about.edit', 'uses'=>'Admin\AdminAboutController@edit']);

Route::post('/admin/about/editSecond', ['as'=>'about.editSecond', 'uses'=>'Admin\AdminAboutController@editSecond']);
//Route::get('/admin/about', )

/// REDIRECT REGISTER URL

Route::delete('/admin/about/deleteShortAbout', ['as'=>'about.deleteShortAbout', 'uses'=>'Admin\AdminAboutController@deleteShortAbout']);
//about.deleteShortAbout


Route::get('contact/send', ['as'=>'contact.send', 'uses'=>'PagesController@contactSend']);


Auth::routes();

Route::get('/home', 'HomeController@index');
