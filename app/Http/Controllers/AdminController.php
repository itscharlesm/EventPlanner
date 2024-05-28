<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

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
        // Fetch roles directly using the Role model
        $roles = Role::all();

        // Render the view for the Employees page and pass the roles data
        return view('admin.employee.employee', [
            'user' => auth()->user(),
            'roles' => $roles
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
        return view('admin.service-order.service-order', [
            'user' => auth()->user()
        ]);
    }
}
