<?php

namespace App\Http\Controllers;

use App\Models\mail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class report extends Controller
{
    public function index()
    {
        return view('Report.report');
    }

    public function dataGraph()
    {
        // return view('HospitalProfile.data-graph');
        $year = Carbon::now()->format('Y');
        $monthlyData = mail::select(DB::raw('MONTH(mail_date) as month'), DB::raw('COUNT(*) as count'), 'mail_type')
            ->whereYear('mail_date', $year)
            ->groupBy(DB::raw('MONTH(mail_date)'), 'mail_type')
            ->get();
        return view('HospitalProfile.data-graph', compact(['monthlyData', 'year']));
    }
}
