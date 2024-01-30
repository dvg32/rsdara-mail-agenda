<?php

namespace App\Http\Controllers;

use App\Models\mail;
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
}
