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

Route::get('/', 'LoginController@login')->name('login');
Route::post('login', 'LoginController@loginaksi')->name('loginaksi');
Route::get('register', 'RegisterController@register')->name('register');
Route::post('register', 'RegisterController@registeraksi')->name('registeraksi');

Route::get('home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('logoutaksi', 'LoginController@logoutaksi')->name('logoutaksi')->middleware('auth');

// User Access
Route::middleware('user')->group(function () {
    Route::get('/report', 'ReportController@index')->name('report');
    Route::post('/report', 'ReportController@submit')->name('submit_report');
    Route::get('/yourreport', 'YourReportController@index')->name('your_report');
    Route::delete('/report/delete/{id}', 'YourReportController@delete')->name('report_delete');
}); 

// Admin & Office Access
Route::middleware('adminOffice')->group(function () {
    Route::get('/preview/report', 'PreviewReportController@index')->name('preview_report');
    Route::put('/preview/report/{id}/update', 'PreviewReportController@updateStatus')->name('update_status_report');
    Route::put('/comment/insert/{id}', 'PreviewReportController@insertComment')->name('insert_comment');
    Route::get('/validated/report', 'ValidatedReportController@index')->name('validated');
    Route::get('/done/report', 'DoneReportController@index')->name('done_report');
});

// Admin Access
Route::middleware('admin')->group(function () {
    Route::get('report/download/{id}', 'ValidatedReportController@downloadReport')->name('download_report');
    Route::get('createofficer', 'RegisterController@registerOfficer')->name('create_office');
    Route::post('createofficer', 'RegisterController@registerAksiOfficer')->name('registerofficer');
});