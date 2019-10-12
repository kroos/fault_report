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

// home
Route::get('/', [
		'as' => 'home',
		'uses' => 'HomeController@index'
	]);

Route::get('/login', [
		'as' => 'login',
		'uses' => 'HomeController@login'
	]);

Route::post('/authenticate', [
		'as' => 'authenticate',
		'uses' => 'HomeController@authenticate'
	]);

Route::post('/logout', [
		'as' => 'logout',
		'uses' => 'HomeController@logout'
	]);

Route::get('/forgot_password', [
	'as' => 'forgot_password',
	'uses' => 'HomeController@forgot_password'
]);

Route::post('/retrieve_password', [
	'as' => 'retrieve_password',
	'uses' => 'HomeController@retrieve_password'
]);

Route::get('/reset_password/{token}', [
	'as' => 'reset_password',
	'uses' => 'HomeController@reset_password'
]);

Route::post('/reset_pass', [
	'as' => 'reset_pass',
	'uses' => 'HomeController@reset_pass'
]);

/////////////////////////////////////////////////////////////////////////////////////////
// user authenticate
Route::get('/main', [
	'as' => 'main.index',
	'uses' => 'MainController@index'
]);

/////////////////////////////////////////////////////////////////////////////////////////
// user change password
Route::get('/change_password/{login}', [
	'as' => 'change_password',
	'uses' => 'Auth\UserChangePasswordController@edit'
]);

Route::patch('/user_change_password/{login}', [
	'as' => 'user_change_password',
	'uses' => 'Auth\UserChangePasswordController@update'
]);

/////////////////////////////////////////////////////////////////////////////////////////
// user profile
Route::get('/edit/{staff}', [
	'as' => 'profile.edit',
	'uses' => 'ProfileController@edit'
]);

Route::patch('/update/{staff}', [
	'as' => 'profile.update',
	'uses' => 'ProfileController@update'
]);

/////////////////////////////////////////////////////////////////////////////////////////
// fault route
Route::resources([
	'fault' => 'Fault\FaultController',
	'faultImage' => 'Fault\FaultImageController',
	'building' => 'BuildingController',
	'staff' => 'StaffController',
]);

// delete fault system
Route::post('/faultsystem/{fault}', [
	'as' => 'fault.system',
	'uses' => 'Fault\FaultController@deleteSystem'
]);

// delete fault deviceTag
Route::post('/faultdeviceTag/{fault}', [
	'as' => 'fault.deviceTag',
	'uses' => 'Fault\FaultController@deleteDeviceTag'
]);

// delete fault attendees
Route::post('/faultattendees/{fault}', [
	'as' => 'fault.attendees',
	'uses' => 'Fault\FaultController@deleteAttendees'
]);

/////////////////////////////////////////////////////////////////////////////////////////
// switch_access route
Route::resources([
	'swAccess' => 'SwitchAccess\SwAccessController',
	'swAccPIC' => 'SwitchAccess\SwAccPICController',
	'swAccPTW' => 'SwitchAccess\SwAccPTWController',
	'swAccSW' => 'SwitchAccess\SwAccSWController',
]);

/////////////////////////////////////////////////////////////////////////////////////////
