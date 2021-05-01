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


Auth::routes();

Route::group(['middleware' => 'auth'], function()
{   
    Route::post('/users/changepassword', 'HomeController@changePassword');
    Route::any('/', 'HomeController@dashboard')->name('dashboard');
    Route::any('/home', 'HomeController@index')->name('home');
    Route::any('/patients', 'patients\PatientController@listall')->name('patients');
    Route::any('/patient/create/{id}', 'patients\PatientController@create');
    Route::post('/patient/save', 'patients\PatientController@save');
    Route::any('/patient/view/{id}', 'patients\PatientController@view');
    Route::post('/patient/delete', 'patients\PatientController@delete');
    Route::post('/get/patients', 'patients\PatientController@getPatients')->name('get/patients');
    
    
    Route::any('/addvisit', 'home_visit\HomeVisitController@listall')->name('addvisit');
    Route::post('/booking/save', 'home_visit\HomeVisitController@save');
    Route::any('/bookings', 'home_visit\HomeVisitController@bookings')->name('bookings');
    Route::any('/bookings/add_data/{bid}/{pid}', 'home_visit\HomeVisitController@bookingsAddData');
    Route::any('/bookings/add_data/save', 'home_visit\HomeVisitController@AddDataSave');
    Route::any('/bookings/pendings', 'home_visit\HomeVisitController@pendingBookings')->name('pendings');

    Route::any('/bookings/delete/{id}', 'home_visit\HomeVisitController@deleteBooking');
    Route::any('/bookings/rebook', 'home_visit\HomeVisitController@rebooking');

    
    Route::any('/addapoinments', 'home_visit\HomeVisitController@clinicListall')->name('addapoinments');
    Route::any('/dailypatients', 'home_visit\HomeVisitController@clinicbookings')->name('dailypatients');
    
    Route::any('/diseases','general\DiseaseController@listall')->name('diseases');
    Route::any('/disease/create/{id}','general\DiseaseController@create');
    Route::any('/disease/view/{id}','general\DiseaseController@view');
    Route::post('/disease/save','general\DiseaseController@save');
    Route::any('/disease/delete/{id}','general\DiseaseController@delete');
    
    Route::any('/medicines','general\MedicineController@listall')->name('medicines');
    Route::any('/medicine/create/{id}','general\MedicineController@create');
    Route::any('/medicine/view/{id}','general\MedicineController@view');
    Route::post('/medicine/save','general\MedicineController@save');
    Route::any('/medicine/delete/{id}','general\MedicineController@delete');
    Route::post('/get/medicines','general\MedicineController@getMedicine')->name('get/medicines');
    Route::post('/medicine/billing/save','general\MedicineController@billingSave');
    
    //prescription routes
    
    Route::any('/prescriptions','general\MedicineController@Prescription')->name('prescriptions');
    Route::any('/prescription/view/{bok_id}/{pat_id}','general\MedicineController@viewPrescription');
    
    
    Route::any('/equipments','general\EquipmentController@listall')->name('equipments');
    Route::any('/equipment/create/{id}','general\EquipmentController@create');
    Route::any('/equipment/view/{id}','general\EquipmentController@view');
    Route::post('/equipment/save','general\EquipmentController@save');
    Route::any('/equipment/delete/{id}','general\EquipmentController@delete');
    
    
    Route::any('/reports/patients','report\ReportController@patientReport')->name('patientreport');
    Route::any('/reports/students','report\ReportController@studentReport')->name('studentreport');
    Route::any('/reports/treatment','report\ReportController@treatmentReport')->name('treatmentreport');
    
    Route::any('/reports/equipments','report\ReportController@equipmentReport')->name('reports/equipments');
    Route::any('/reports/equipments/create/{id}','report\ReportController@equipmentCreate');
    
    Route::any('/reports/equipments/save','report\ReportController@equipmentSave');
    Route::any('/reports/equipments/return','report\ReportController@equipmentReturn');


    Route::any('/users','Auth\RegisterController@Users')->name('users');
    Route::any('/users/delete/{id}','Auth\RegisterController@userDelete');




    Route::any('/volunteers','VolunteerController@index')->name('volunteers');
    Route::any('/volunteers/create/{id}','VolunteerController@create');

    Route::post('/volunteer/save','VolunteerController@save');
    Route::any('/volunteers/view/{id}','VolunteerController@view');



    Route::any('/daily_volunteers','VolunteerController@dailyVolunteer')->name('daily_volunteers');
    Route::any('/daily_volunteers/create/{id}','VolunteerController@dailyVolunteerCreate');

    Route::post('/get/volunteers', 'VolunteerController@getVolunteers')->name('get/volunteers');
    Route::post('/daily_volunteers/save', 'VolunteerController@dailyVolunteerSave');
    Route::any('/daily_volunteers/delete/{id}', 'VolunteerController@dailyVolunteerDelete');


});

