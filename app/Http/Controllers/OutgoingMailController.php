<?php

namespace App\Http\Controllers;

use App\Models\outgoing_mail;
use App\Http\Requests\Storeoutgoing_mailRequest;
use App\Http\Requests\Updateoutgoing_mailRequest;

class OutgoingMailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('OutgoingMail.OutgoingMail');
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
    public function store(Storeoutgoing_mailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(outgoing_mail $outgoing_mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(outgoing_mail $outgoing_mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateoutgoing_mailRequest $request, outgoing_mail $outgoing_mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(outgoing_mail $outgoing_mail)
    {
        //
    }
}
