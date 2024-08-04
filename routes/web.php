<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\verifyEmailController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page/index');
});

Route::middleware('guest')->prefix('started')->group(function () {
    Route::get('/login', [loginController::class, 'index'])->name('login.index');
    Route::post('/login-auth', [loginController::class, 'login'])->name('login.auth');
    Route::get('/register', [registerController::class, 'create'])->name('register.index');
    Route::resource('register', registerController::class);
});

Route::middleware(['auth'])->prefix('register')->group(function () {
    Route::get('/verify-email', [verifyEmailController::class, 'index'])->name('register.verify');
    Route::post('/processing-verification', [verifyEmailController::class, 'verify'])->name('register.verification');
    Route::post('/resend-verification', [verifyEmailController::class, 'resendVerification'])->name('register.resend');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [loginController::class, 'logout']);
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('dashboard', dashboardController::class);
    Route::resource('products', productsController::class);
    Route::get('/user', [dashboardController::class, 'user'])->name('dashboard.user');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
