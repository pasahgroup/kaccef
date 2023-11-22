<?php

namespace App\Http\Controllers;

use App\Models\kacce;
use App\Http\Requests\StorekacceRequest;
use App\Http\Requests\UpdatekacceRequest;

class KacceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekacceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekacceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kacce  $kacce
     * @return \Illuminate\Http\Response
     */
    public function show(kacce $kacce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kacce  $kacce
     * @return \Illuminate\Http\Response
     */
    public function edit(kacce $kacce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekacceRequest  $request
     * @param  \App\Models\kacce  $kacce
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekacceRequest $request, kacce $kacce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kacce  $kacce
     * @return \Illuminate\Http\Response
     */
    public function destroy(kacce $kacce)
    {
        //
    }
}
