<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

// Route::get('/test', 'DiysController@create');

Route::resource('diys', 'DiysController');
Route::resource('tags', 'TagsController');
Route::resource('ratings', 'RatingsController');
Route::resource('usages', 'UsagesController');
Route::resource('instances', 'InstancesController');
