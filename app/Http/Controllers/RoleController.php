<?php
// RoleController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function saveRole(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'role' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        // Generate a unique roleID
        $roleID = Role::max('roleID') + 1;

        // Create a new role instance
        $role = new Role;
        $role->roleID = $roleID;
        $role->role = $validatedData['role'];
        $role->description = $validatedData['description'];
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

        // Return the roles
        return $roles;
    }
}
