<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/' , function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/patients', 'patients\PatientController@listall')->name('patients');
Route::get('/patient/create/{id}', 'patients\PatientController@create');
Route::post('/patient/save', 'patients\PatientController@save');
Route::get('/patient/view/{id}', 'patients\PatientController@view');
Route::get('/patient/delete/{id}', 'patients\PatientController@delete');


Route::get('/addvisit', 'home_visit\HomeVisitController@listall')->name('addvisit');
Route::post('/booking/save', 'home_visit\HomeVisitController@save');
Route::get('/bookings', 'home_visit\HomeVisitController@bookings')->name('bookings');
Route::get('/bookings/add_data/{bid}/{pid}', 'home_visit\HomeVisitController@bookingsAddData');

