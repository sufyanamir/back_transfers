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
    return view('index');
});

Route::get('/', function () {
    return view('Home');
});

Route::get('/test', function () {
    return view('test');
});
Route::get('/booking', function () {
    return view('Booking');
});

Route::get('/whybooking', function () {
    return view('whyBooking');
});

Route::get('/bookingextra', function () {
    return view('bookingExtra');
});

Route::get('/bookingpassenger', function () {
    return view('bookingPassenger');
});
Route::get('/bookingpayment', function () {
    return view('bookingPayment');
});
Route::get('/bookingrecieved', function () {
    return view('bookingRecieved');
});




