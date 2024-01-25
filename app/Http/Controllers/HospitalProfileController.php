<?php

namespace App\Http\Controllers;

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
        //
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
