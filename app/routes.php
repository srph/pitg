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
 * @link thread/*
 * Thread resource
 */
Route::resource('thread', 'ThreadController');

/**
 * @link auth/*
 * Auth controller
 */
Route::controller('auth', 'AuthenticationController');

/**
 * @link /user/settings
 * Account settings
 */
Route::get('user/settings/', array(
	'as' 	=>	'user_settings',
	'uses'	=>	'UserController@getAccountSettings'
));

/**
 * @link /user/settings/profile
 * Profile settings
 */
Route::get('user/settings/profile', array(
	'as'	=>	'profile_settings',
	'uses' 	=>	'UserController@getProfileSettings'
)); 

/**
 * @link /logout
 * Fancy link to logout
 */
Route::get('logout', array(
	'as'	=>	'logout',
	'uses'	=>	'AuthenticationController@getLogout'
));