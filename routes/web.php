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

Route::get('/fleets', function () {
    return view('fleet');
});

Route::get('/serviceslist', function () {
    return view('services');
});


Route::get('/login', function () {
    return view('signUp');
});

Route::get('/signup', function () {
    return view('register');
});

Route::get('/servicessingle', function () {
    return view('servicesSingle');
});
Route::get('/fleetsingle', function () {
    return view('fleetSingle');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/editprofile', function () {
    return view('editProfile');
});

Route::get('/changepassword', function () {
    return view('changePassword');
});
Route::get('/locations', function () {
    return view('dashboard.savedLocations');
});


Route::get('/mybookings', function () {
    return view('dashboard.myBookings');
});
Route::get('/invoice', function () {
    return view('dashboard.invoice');
});

Route::get('/admin', function () {
    return view('admindashboard.dashboard');
});

Route::get('/admin/services', function () {
    return view('admindashboard.adminServices');
});


Route::get('/admin/bookings', function () {
    return view('admindashboard.allBookings');
});


Route::get('/admin/fleets', function () {
    return view('admindashboard.adminFleets');
});

Route::get('/admin/editProfile', function () {
    return view('admindashboard.adminProfile');
});

Route::get('/admin/changePassword', function () {
    return view('admindashboard.changepassword');
});
Route::get('/admin/invoiceing', function () {
    return view('admindashboard.invoiceing');
});
Route::get('/admin/cutomers', function () {
    return view('admindashboard.customers');
});
Route::get('/admin/users', function () {
    return view('admindashboard.users');
});
Route::get('/admin/reports', function () {
    return view('admindashboard.reports');
});






