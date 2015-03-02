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

//Global Patterns
Route::pattern('id', '[0-9]+');


//Routes
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showDashboard'));

Route::get('/city/{id}', array('as' => 'city', 'uses' => 'CityController@showCity'));
