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

//This is where I will register my site pages. 

Route::get('/', 'PagesController@index');

Route::get('/', [
	'uses' => 'PlacesController@getIndex',
	'as' => 'places.index'

]);

route::resource('businesses', 'BusinessesController');
route::resource('business', 'BusinessesController');
route::get('my-businesses', 'BusinessesController@userIndex');

//route::get('specials/create/{business_id?}', 'SpecialsController@create');
route::post('businesses/adduser/', 'BusinessesController@adduser')->name('businesses.adduser');

route::resource('specials', 'SpecialsController');
route::resource('comments', 'CommentsController');
route::resource('roles', 'RolesController');
route::resource('state', 'StatesController');
route::resource('users', 'businessesController');



Route::get('/asheville', function() {
	return view('pages.asheville');
});




Route::get('/southern', function(){
	return view('pages.southern');
});








// Route::resource('businesses', 'businessesController');

// Route::resource('members', 'membersController');

/*

Route::get('/', function() {
	$states = DB::table('states')->get();
	return $states;
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
