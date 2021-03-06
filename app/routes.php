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

Route::get('/', 'HomeController@showHome');

Route::get('status', 'StatusController@getStatus');

Route::get('comment', 'ForumController@getComments');
Route::post('comment', 'ForumController@postComment');

Route::get('admin', 'AdminController@showAdmin');
Route::post('login', 'AdminController@login');

Route::get('update', 'AdminController@getUpdate');
Route::post('update', array('before' => 'auth', 'uses' => 'AdminController@postUpdate'));
