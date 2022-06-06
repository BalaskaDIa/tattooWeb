<?php

namespace App\Http\Controllers;

use App\Models\Tattoo;
use App\Http\Requests\StoreTattooRequest;
use App\Http\Requests\UpdateTattooRequest;

class TattooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTattooRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTattooRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tattoo  $tattoo
     * @return \Illuminate\Http\Response
     */
    public function show(Tattoo $tattoo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tattoo  $tattoo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tattoo $tattoo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTattooRequest  $request
     * @param  \App\Models\Tattoo  $tattoo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTattooRequest $request, Tattoo $tattoo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tattoo  $tattoo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tattoo $tattoo)
    {
        //
    }
}
