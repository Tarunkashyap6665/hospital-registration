<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','PatientRegisterationController@register');
Route::post('/registration-patient','PatientRegisterationController@register')->name('patientregister');
Route::get('/registered/{id:int}',function($id){
    return view('registered-successfully',['id'=>$id]);
})->name('register-successfully');

Route::get('/admin', 'DashboardController@index')->name('dashboard')->middleware('auth:sanctum');

Route::group(['prefix'=>'admin'],function(){
    // Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/edit-record/{id:int}','DashboardController@edit')->name('edit-record');
    Route::post('/update-record','DashboardController@edit')->name('update-record');
    Route::get('/delete-record/{id:int}','DashboardController@delete')->name('delete-record');
    Route::get('/view-record/{id:int}','DashboardController@view')->name('view-record');
});
