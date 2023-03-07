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



// Akses Pengguna
Route::get('/report', 'ReportController@index')->name('report')->middleware('user');

Route::post('/report', 'ReportController@submit')->name('submit_report')->middleware('user');

Route::get('/yourreport', 'YourReportController@index')->name('your_report')->middleware('user');


// Akses Admin & Office
Route::get('/previewreport', 'PreviewReportController@index')->name('preview_report')->middleware('adminOffice');

Route::put('/previewreport/{id}/update', 'PreviewReportController@updateStatus')->name('update_status_report')->middleware('adminOffice');
