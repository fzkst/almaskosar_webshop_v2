<?php

namespace App\Http\Controllers;

use App\Models\Ipad;
use App\Http\Requests\StoreIpadRequest;
use App\Http\Requests\UpdateIpadRequest;

class IpadController extends Controller
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
     * @param  \App\Http\Requests\StoreIpadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIpadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ipad  $ipad
     * @return \Illuminate\Http\Response
     */
    public function show(Ipad $ipad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ipad  $ipad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ipad $ipad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIpadRequest  $request
     * @param  \App\Models\Ipad  $ipad
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIpadRequest $request, Ipad $ipad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ipad  $ipad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ipad $ipad)
    {
        //
    }
}
