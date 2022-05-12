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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('about','HomeController@About')->name('about');
Route::get('contact-us','HomeController@ContactUs')->name('contact-us');

Route::get('login', function () {
    return view('welcome');
})->name('login');
