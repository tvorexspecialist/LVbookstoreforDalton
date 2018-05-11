<?php

use Gloudemans\Shoppingcart\Facades\Cart;

/**
 * These routes are loaded by the RouteServiceProvider within
 * a group which contains the "web" middleware group.
 */

// Resources
Auth::routes();
Route::resource('items',  'ItemController', ['except' => ['show']]);
Route::resource('cards',  'CardController', ['except' => ['show']]);
Route::resource('slider', 'SliderController', ['except' => ['show']]);
Route::resource('contacts', 'ContactController', ['except' => ['show', 'index']]);

// Cart
Route::get('/cart','CartController@index');
Route::post('/cart/store','CartController@store');
Route::delete('/cart/{item}','CartController@destroy');

Route::get('empty', function () {
	Cart::destroy();
});

// Items
Route::get('item/{item}', 'ItemController@show');

// Page Controllers
Route::get('/', 'PageController@home');
Route::get('language/{lang}', 'PageController@lang');

// Search
Route::view('search', 'search');
Route::post('search', 'SearchController@handleTheRequest');

// User
Route::view('user/dashboard', 'user.dashboard')->middleware('auth');

// Artisan commands =======
Route::prefix('php/artisan')->group(function () {
	Route::get('cache/{url_key}',		  'ArtisanController@cache');
	Route::get('clear/{url_key}',		  'ArtisanController@clear');
	Route::get('storage/link/{url_key}',  'ArtisanController@link');
	Route::get('migrate/fresh/{url_key}', 'ArtisanController@migrate');
});