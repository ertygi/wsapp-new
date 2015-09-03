<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Pages\PagesController@home');

Route::resource('reports', 'ReportsController');
Route::get('reports/analyze', 'ReportsController@analyze');



/**
 * Authentication
 */
Route::controllers([

    'auth' => 'Auth\AuthController',
    'password' => 'Auth\passwordController',

]);