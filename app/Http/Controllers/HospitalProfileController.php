<?php

namespace App\Http\Controllers;

use App\Models\mail;
use App\Models\hospital_profile;
use App\Http\Requests\Storehospital_profileRequest;
use App\Http\Requests\Updatehospital_profileRequest;

class HospitalProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('HospitalProfile.HospitalProfileIndex',[
            'allMail' => mail::paginate(100),
            'mailCount' =>Mail::count(),
            'MailIn' => Mail::where('mail_type', 1)->count(),
            'MailOut' => Mail::where('mail_type', 2)->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function incomingMail()
    {
        return view('IncomingMail.IncomingMail', [
            'Mail' => mail::where('mail_type', 1)->orderBy('mail_date', 'desc')->get(),
        ]);
    }

    public function outgoingMail()
    {
        return view('OutgoingMail.OutgoingMail', [
            'Mail' => mail::where('mail_type', 2)->orderBy('mail_date', 'desc')->get(),
        ]);
    }

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
