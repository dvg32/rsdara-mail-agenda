<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

    public function employee_management()
    {
        return view('admin.employee_management');
    }

    public function user_management()
    {
        return view('admin.user_management');
    }
}
