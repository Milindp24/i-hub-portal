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

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

Route::view('student_registrations','registration');

Route::view('login','login');

Route::view('home','home');

Route::view('contact','contact');

// Route::view('events','events');
Route::get('/events','StudentController@events');

Route::get('/about','StudentController@about');

Route::get('/internship','StudentController@internship');

Route::get('/signup','StudentController@signup');

Route::get('/incubated-startup','StudentController@incubated_startup');

Route::get('/startup-sarthi','StudentController@startup_sarthi');

Route::get('/startup-saksham','StudentController@startup_saksham');

Route::get('/startup-manak','StudentController@startup_manak');

Route::get('/ssip-prashansa','StudentController@ssip_prashansa');

Route::get('/startup-mart','StudentController@startup_mart');

Route::get('/startup-goonj','StudentController@startup_goonj');

Route::get('/ssip-samajh','StudentController@ssip_samajh');

Route::get('/ssip-samarth','StudentController@ssip_samarth');

Route::get('/soic','StudentController@soic');

Route::resource('student','StudentController');

Route::get('/verify/{token}','VerifyController@verify')->name('verify');

// Route::resource('student','StudentController');

Route::get('/login','LoginController@index');

Route::post('/login/checklogin','LoginController@checklogin');

Route::get('/login/successlogin','LoginController@successlogin');

Route::get('/login/logout','LoginController@logout');

Route::get('/admin', 'AdminController@index');

// Route::resource('Admin','AdminController');

Route::post('/admin/checkadminlogin','AdminController@checkadminlogin');

Route::get('/admin/dashboard','AdminController@dashboard');

Route::get('/admin/add_events','AdminController@add_events');

Route::get('/admin/event_list','AdminController@event_list');

Route::post('/admin/insert_events','AdminController@insert_events');

Route::get('/admin/add_notice','AdminController@add_notice');

Route::post('/admin/insert_notice','AdminController@insert_notice');

Route::get('/admin/notice_list','AdminController@notice_list');