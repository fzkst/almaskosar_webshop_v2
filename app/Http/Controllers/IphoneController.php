<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use App\Http\Requests\StoreIphoneRequest;
use App\Http\Requests\UpdateIphoneRequest;

class IphoneController extends Controller
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
     * @param  \App\Http\Requests\StoreIphoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIphoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iphone  $iphone
     * @return \Illuminate\Http\Response
     */
    public function show(Iphone $iphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iphone  $iphone
     * @return \Illuminate\Http\Response
     */
    public function edit(Iphone $iphone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIphoneRequest  $request
     * @param  \App\Models\Iphone  $iphone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIphoneRequest $request, Iphone $iphone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iphone  $iphone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iphone $iphone)
    {
        //
    }
}
