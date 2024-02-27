<?php

use App\Http\Controllers\userController;
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

Route::post('registerdata', [userController::class, 'register']);
Route::post('loginData', [userController::class, 'login']);
Route::match(['get', 'post'], 'logout', [userController::class, 'logout']);

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
    return view('login');
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


Route::get('/invoice', function () {
    return view('dashboard.invoice');
});


Route::get('/admin/login', function () {
    return view('admindashboard.login');
});
Route::middleware(['customAuth'])->group(function () {


    // admin Auth
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
});

Route::get('/admin/users', [userController::class, 'getUserDate']);
Route::post('/admin/Alogindata', [userController::class, 'adminlogin']);
Route::match(['get', 'post'], 'Alogout', [userController::class, 'Alogout']);
