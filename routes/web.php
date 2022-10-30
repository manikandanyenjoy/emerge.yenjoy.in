<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Route::get('register', [RegisterController::class, 'showRegistrationForm'])
//     ->name('register')
//     ->middleware(['otpVerify']);
Route::get('/borrowerlogin', [App\Http\Controllers\Auth\LoginController::class, 'borrowerLogin'])->name('borrowerlogin');
Route::get('/borrower', [App\Http\Controllers\Auth\RegisterController::class, 'borrowerRegister'])->name('borrowerRegister');
Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test/purchase', [App\Http\Controllers\OtpController::class, 'confirmationPage']);
Route::post('/kyc_create', [App\Http\Controllers\KycController::class, 'create'])->name('kyc_create');
Route::post('/test/otp-request', [App\Http\Controllers\OtpController::class, 'requestForOtp'])->name('requestForOtp');
Route::post('/test/otp-validate', [App\Http\Controllers\OtpController::class, 'validateOtp'])->name('validateOtp');
Route::post('/test/otp-resend', [App\Http\Controllers\OtpController::class, 'resendOtp'])->name('resendOtp');
Route::get('/borrowerdashboard', [App\Http\Controllers\HomeController::class, 'borrowerDashboard'])->name('borrowerDashboard');


//admin
Route::get('/adminregister', [App\Http\Controllers\Admin\AdminLandingController::class, 'adminRegister'])->name('adminRegister');
Route::get('/admin', [App\Http\Controllers\Admin\AdminLandingController::class, 'adminLogin'])->name('adminLogin');
Route::get('/dashboard', [App\Http\Controllers\Admin\UserManagementController::class, 'userList'])->name('userList');
