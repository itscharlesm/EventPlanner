<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'roleID' => 'required|integer|exists:role,id', // Check if the selected roleID exists in the roles table
            'lastName' => 'required|string|max:255',
            'firstName' => 'required|string|max:255',
            'middleName' => 'nullable|string|max:255',
            'birthDate' => 'required|date',
            'age' => 'required|integer',
            'address' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:employee',
            'password' => 'required|string|min:8',
        ]);

        // Fetch the corresponding role
        $role = Role::findOrFail($request->input('roleID'));

        // Create new Employee instance
        $employee = new Employee([
            'roleID' => $role->id,
            'lastName' => $request->input('lastName'),
            'firstName' => $request->input('firstName'),
            'middleName' => $request->input('middleName'),
            'birthDate' => $request->input('birthDate'),
            'age' => $request->input('age'),
            'address' => $request->input('address'),
            'mobile_number' => $request->input('mobile_number'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'profile_pic' => 'default_profile_pic.jpg',
        ]);

        $employee->save();

        return redirect()->back()->with('success', 'Employee added successfully');
    }

    public function getEmployees()
    {
        // Fetch all employees from the database
        $employees = Employee::all();

        // Return the employees
        return $employees;
    }


}
