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
Route::get('resume','HomeController@Resume')->name('resume');
Route::get('customer-support','HomeController@CustomerSupport')->name('customer-support');
Route::get('web-development','HomeController@WebDevelopment')->name('web-development');

Route::get('generate-pdf', 'PdfGenerateController@pdfview')->name('generate-pdf');

Route::get('login', function () {
    return view('welcome');
})->name('login');
