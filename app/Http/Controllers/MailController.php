<?php

namespace App\Http\Controllers;

use App\Models\mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoremailRequest;
use App\Http\Requests\UpdatemailRequest;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('IncomingMail.IncomingMail');
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
    public function store(StoremailRequest $request)
    {
        //
        // dd($request);
        $validatedData = $request->validate([
            'mail_code' => 'required',
            'mail_from' => 'required',
            'mail_subject' => 'required',
            'mail_number' => 'required',
            'mail_date' => 'required',
            'document_location' => 'required',
            'mail_type' => 'required',
        ]);
        $validatedData['input_date'] = Carbon::now();
        $validatedData['status'] = 1;
        mail::create($validatedData);
        return redirect()->route('dashboard')->with('success', 'Data Surat Berhasil Diinputkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemailRequest $request, mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mail $mail)
    {
        //
    }

    public function getMonthlyData()
    {
        $monthlyData = mail::select(DB::raw('MONTH(mail_date) as month'), DB::raw('COUNT(*) as count'), 'mail_type')
            ->groupBy(DB::raw('MONTH(mail_date)'), 'mail_type')
            ->get();
        return view('HospitalProfile.mail_data2', compact('monthlyData'));

    }
}
