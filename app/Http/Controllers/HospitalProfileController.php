<?php

namespace App\Http\Controllers;

use App\Models\mail;
use Illuminate\Http\Request;
use App\Models\hospital_profile;
use App\Http\Requests\Storehospital_profileRequest;
use App\Http\Requests\Updatehospital_profileRequest;

class HospitalProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $currentYear = date('Y');

    // Mendapatkan tahun yang dipilih dari permintaan (request)
    $selectedYear = $request->input('year', $currentYear);

    // Mendapatkan data surat berdasarkan tahun yang dipilih
    $mailData = Mail::whereYear('mail_date', $selectedYear)->paginate(100);

    // Menghitung total surat
    $mailCount = $mailData->total();

    // Menghitung surat masuk dan surat keluar
    $mailInCount = $mailData->where('mail_type', 1)->count();
    $mailOutCount = $mailData->where('mail_type', 2)->count();

    return view('HospitalProfile.HospitalProfileIndex', [
        'Mail' => $mailData,
        'mailCount' => $mailCount,
        'MailIn' => $mailInCount,
        'MailOut' => $mailOutCount,
        'selectedYear' => $selectedYear, // Untuk mengirimkan tahun yang dipilih ke tampilan
        'currentYear' => $currentYear, // Untuk mengirimkan tahun saat ini ke tampilan
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storehospital_profileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(hospital_profile $hospital_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hospital_profile $hospital_profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatehospital_profileRequest $request, hospital_profile $hospital_profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hospital_profile $hospital_profile)
    {
        //
    }
}
