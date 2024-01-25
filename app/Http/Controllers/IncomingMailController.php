<?php

namespace App\Http\Controllers;

use App\Models\incoming_mail;
use App\Http\Requests\Storeincoming_mailRequest;
use App\Http\Requests\Updateincoming_mailRequest;

class IncomingMailController extends Controller
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
    public function store(Storeincoming_mailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(incoming_mail $incoming_mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(incoming_mail $incoming_mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateincoming_mailRequest $request, incoming_mail $incoming_mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(incoming_mail $incoming_mail)
    {
        //
    }
}
