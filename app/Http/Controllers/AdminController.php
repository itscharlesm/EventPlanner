<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Employee;

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
        // Fetch roles and employees directly using the Role model and Employee Model
        $roles = Role::all();
        $employees = Employee::all();

        // Render the view for the Employees page and pass the roles data and employees data
        return view('admin.employee.employee', [
            'user' => auth()->user(),
            'roles' => $roles,
            'employees' => $employees
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
