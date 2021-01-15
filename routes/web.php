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
Route::any('/bookings/add_data/save', 'home_visit\HomeVisitController@AddDataSave');

Route::get('/addapoinments', 'home_visit\HomeVisitController@clinicListall')->name('addapoinments');
Route::get('/dailypatients', 'home_visit\HomeVisitController@clinicbookings')->name('dailypatients');

Route::get('/diseases','general\DiseaseController@listall')->name('diseases');
Route::get('/disease/create/{id}','general\DiseaseController@create');
Route::get('/disease/view/{id}','general\DiseaseController@view');
Route::post('/disease/save','general\DiseaseController@save');
Route::get('/disease/delete/{id}','general\DiseaseController@delete');

Route::get('/medicines','general\MedicineController@listall')->name('medicines');
Route::get('/medicine/create/{id}','general\MedicineController@create');
Route::get('/medicine/view/{id}','general\MedicineController@view');
Route::post('/medicine/save','general\MedicineController@save');
Route::get('/medicine/delete/{id}','general\MedicineController@delete');

Route::get('/equipments','general\EquipmentController@listall')->name('equipments');
Route::get('/equipment/create/{id}','general\EquipmentController@create');
Route::get('/equipment/view/{id}','general\EquipmentController@view');
Route::post('/equipment/save','general\EquipmentController@save');
Route::get('/equipment/delete/{id}','general\EquipmentController@delete');


Route::any('/reports/patients','report\ReportController@patientReport')->name('patientreport');
Route::get('/reports/students','report\ReportController@studentReport')->name('studentreport');
Route::any('/reports/treatment','report\ReportController@treatmentReport')->name('treatmentreport');
