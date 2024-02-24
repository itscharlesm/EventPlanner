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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/appointments', function () {
    return view('admin.appointment.appointment');
});

Route::get('/service-orders', function () {
    return view('admin.service-order.serviceorder');
});

Route::get('/clients', function () {
    return view('admin.client.client');
});

Route::get('/employees', function () {
    return view('admin.employee.employee');
});

Route::get('/clients', function () {
    return view('admin.client.client');
});

Route::get('/services', function () {
    return view('admin.service.service');
});

Route::get('/income-report', function () {
    return view('admin.report.income');
});