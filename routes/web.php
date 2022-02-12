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
});

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::post('/login-post', 'DashboardController@postLogin')->name('auth.login.post');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/booking-post', 'DashboardController@bookingPost')->name('booking.post');
Route::post('/booking-put/{booking_id}', 'DashboardController@bookingPut')->name('booking.put');
Route::get('/booking-del/{booking_id}', 'DashboardController@bookingDelete')->name('booking.delete');
