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
}
