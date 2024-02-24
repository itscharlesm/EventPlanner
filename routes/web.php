<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


// Route to show the login form
Route::get('/', [SessionController::class, 'showLoginForm'])->name('login');

// Route to handle login form submission
Route::post('/login', [SessionController::class, 'login']);

// // Route to handle user logout
// Route::match(['get', 'post'], '/logout', [SessionController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'admin'])->name('dashboard');

    Route::get('/appointments', [AdminController::class, 'appointments'])->name('appointments');

    Route::get('/service-orders', function () {
        return view('admin.service-order.serviceorder');
    })->name('service-orders');

    Route::get('/clients', function () {
        return view('admin.client.client');
    })->name('clients');

    Route::get('/employees', function () {
        return view('admin.employee.employee');
    })->name('employees');

    Route::get('/services', function () {
        return view('admin.service.service');
    })->name('services');

    Route::get('/income-report', function () {
        return view('admin.report.income');
    })->name('income-report');

    Route::get('/logout', [SessionController::class, 'logout']);

});

