<?php

namespace App\Http\Controllers;

use App\Models\reference;
use App\Http\Requests\StorereferenceRequest;
use App\Http\Requests\UpdatereferenceRequest;
use Illuminate\Support\Facades\Storage;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Reference.Reference');
    }

    public function panduanSurat()
    {
        return view('Reference.MailGuide');
    }

    public function dataPanduanSurat()
    {
        $path = public_path('assets/pdf/panduan.pdf');

        if (!file_exists($path)) {
            # code...
            abort(404, 'FIle not found');
        }

        $content = file_get_contents($path);

        return response($content)->header('Content-Type', 'application/pdf');
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
    public function store(StorereferenceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reference $reference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereferenceRequest $request, reference $reference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reference $reference)
    {
        //
    }
}
