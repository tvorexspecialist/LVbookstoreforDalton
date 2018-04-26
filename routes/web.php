<?php

/**
 * These routes are loaded by the RouteServiceProvider within
 * a group which contains the "web" middleware group.
 */

Auth::routes();

// Items
Route::get('items', 'ItemController@index');
Route::get('items/create', 'ItemController@create');
Route::put('items/store', 'ItemController@store');
Route::get('item/{item}', 'ItemController@show');

// Page Controllers
Route::get('/', 'PageController@home');
Route::get('language/{lang}', 'PageController@lang');

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
