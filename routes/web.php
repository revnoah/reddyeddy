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

// Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Route::resource('/document', 'DocumentController');
Route::resource('/signup', 'SignupController');

//https://quantizd.com/google-drive-client-api-with-laravel/
// Route::get('/login/google', 'Auth\LoginController@redirectToGoogleProvider');
// Route::get('login/google/callback', 'Auth\LoginController@handleProviderGoogleCallback');
