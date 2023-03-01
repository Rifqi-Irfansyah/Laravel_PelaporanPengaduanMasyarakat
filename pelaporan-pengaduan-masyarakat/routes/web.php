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

Route::post('loginaksi', 'LoginController@loginaksi')->name('loginaksi');

Route::get('home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('logoutaksi', 'LoginController@logoutaksi')->name('logoutaksi')->middleware('auth');
