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

/**
 * @link /
 * Index
 */
Route::get('/', array(
	'as'	=> 'home',
	'uses'	=> 'HomeController@getIndex'
));

/**
 * @link auth/logout
 * Logout route
 */
Route::get('auth/logout', array(
	'as'	=>	'logout',
	'uses'	=>	'AuthenticationController@getLogout'
));

/**
 * @link thread/*
 * Thread resource
 */
Route::resource('thread', 'ThreadController');