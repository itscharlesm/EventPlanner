<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


// Route to show the login form
Route::get('/', [SessionController::class, 'showLoginForm'])->name('login');

// Route to handle login form submission
Route::post('/login', [SessionController::class, 'login']);

// // Route to handle user logout
// Route::match(['get', 'post'], '/logout', [SessionController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'admin'])->name('dashboard');

    Route::get('/appointments', [AdminController::class, 'appointments'])->name('appointments');

    Route::get('/service-orders', [AdminController::class, 'service_order'])->name('service-orders');

    Route::get('/clients', [AdminController::class, 'clients'])->name('clients');

    Route::get('/employees', [AdminController::class, 'employees'])->name('employees');
    Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::post('/save-role', [RoleController::class, 'saveRole'])->name('save.role');
    Route::get('/roles', [RoleController::class, 'getRoles'])->name('roles');

    Route::get('/services', [AdminController::class, 'services'])->name('services');

    Route::get('/income-report', [AdminController::class, 'income'])->name('income-report');

    Route::get('/logout', [SessionController::class, 'logout']);


});

