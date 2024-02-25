<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.index', [
            'user' => auth()->user()
        ]);
    }

    public function appointments()
    {
        return view('admin.appointment.appointment', [
            'user' => auth()->user()
        ]);
    }

    public function clients()
    {
        return view('admin.client.client', [
            'user' => auth()->user()
        ]);
    }

    public function employees()
    {
        return view('admin.employee.employee', [
            'user' => auth()->user()
        ]);
    }

    public function income()
    {
        return view('admin.report.income', [
            'user' => auth()->user()
        ]);
    }

    public function services()
    {
        return view('admin.service.service', [
            'user' => auth()->user()
        ]);
    }

    public function service_order()
    {
        return view('admin.service-order.serviceorder', [
            'user' => auth()->user()
        ]);
    }
}
