<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class report extends Controller
{
    public function index()
    {
        return view('Report.report');
    }
}
