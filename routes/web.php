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



Route::get('/report', 'ReportController@index')->name('report');
