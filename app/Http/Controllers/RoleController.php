<?php
// RoleController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role; // Make sure to import your Role model

class RoleController extends Controller
{
    public function saveRole(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'role' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        // Create a new role instance
        $role = new Role;
        $role->role = $validatedData['role'];
        $role->description = $validatedData['description'];

        // Save the role to the database
        $role->save();

        // Flash success message to session
        session()->flash('success', 'Role saved successfully');

        // Redirect to the 'employees' route
        return redirect()->route('employees');

    }
    public function getRoles()
    {
        // Fetch all roles from the database
        $roles = Role::all();

        // Pass the roles data to the view
        return $roles;
    }
}


