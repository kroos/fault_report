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
	'faultDoc' => 'Fault\FaultDocumentController',
	'building' => 'BuildingController',
	'staff' => 'StaffController',
]);
Route::get('/fault/{fault}/showpdf', 'Fault\FaultController@showpdf')->name('fault.showpdf')->middleware('auth');

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
// PPM Checklist
Route::get('/inspection', 'Checklist\InspectionController@index')->name('inspection.index')->middleware('auth');
Route::get('/inspection/create', 'Checklist\InspectionController@create')->name('inspection.create')->middleware('auth');
Route::post('/inspection/store', 'Checklist\InspectionController@store')->name('inspection.store')->middleware('auth');
Route::patch('/inspection/{inspection}/update', 'Checklist\InspectionController@update')->name('inspection.update')->middleware('auth');
Route::patch('/inspection/{inspection}/updatereview', 'Checklist\InspectionController@updatereview')->name('inspection.updatereview')->middleware('auth');
Route::patch('/inspection/{inspection}/updateapprove', 'Checklist\InspectionController@updateapprove')->name('inspection.updateapprove')->middleware('auth');
Route::get('/inspection/{inspection}/show', 'Checklist\InspectionController@show')->name('inspection.show')->middleware('auth');
Route::get('/inspection/{inspection}/pdf', 'Checklist\InspectionController@showpdf')->name('inspection.showpdf')->middleware('auth');
Route::get('/inspection/{inspection}/edit', 'Checklist\InspectionController@edit')->name('inspection.edit')->middleware('auth');
Route::delete('/inspection/{inspection}', 'Checklist\InspectionController@destroy')->name('inspection.delete')->middleware('auth');

Route::delete('/inspectionAttend/{inspectionAttend}', 'Checklist\InspectionAttendeesController@destroy')->name('inspectionAttend.destroy')->middleware('auth');
Route::delete('/inspectionImage/{inspectionImage}', 'Checklist\InspectionImageController@destroy')->name('inspectionImage.destroy')->middleware('auth');



Route::get('/template', 'Checklist\TemplateController@index')->name('template.index')->middleware('auth');
Route::get('/template/create', 'Checklist\TemplateController@create')->name('template.create')->middleware('auth');
Route::post('/template/store', 'Checklist\TemplateController@store')->name('template.store')->middleware('auth');
Route::get('/template/{template}/edit', 'Checklist\TemplateController@edit')->name('template.edit')->middleware('auth');
Route::delete('/template/{template}', 'Checklist\TemplateController@destroy')->name('template.delete')->middleware('auth');



// Use App\Model\Inspection;
// Use App\Notifications\InspectionUserNotification;
// Route::get('/', function () {
// 	$user = App\Model\Login::find(1);
// 	$user->notify(new InspectionUserNotification($inspection=Inspection::find(1), $status = 'test'));
// 	return redirect(route('inspection.index'));;
// });


// Route::get('send', 'NotifyController@index');
// Route::get('mail', function () {
//     $order = App\Order::find(1);

//     return (new App\Notifications\InspectionUserNotification($order))
//                 ->toMail($order->user);
// });