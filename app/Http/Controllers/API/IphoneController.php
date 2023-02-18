<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIphoneRequest;
use App\Http\Requests\UpdateIphoneRequest;
use App\Models\Iphone;
use Illuminate\Http\Request;

class IphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iphones = Iphone::all();
        return response()->json($iphones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIphoneRequest $request)
    {
        $iphone = new Iphone();
        $iphone->fill($request->all());
        $iphone->save();
        return response()->json($iphone, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iphone = Iphone::find($id);
        if (is_null($iphone)){
            return response()->json(['message'=>'Ilyen azonosítóval nem található termék!'], 404);
        }
        return response()->json($iphone, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIphoneRequest $request, $id)
    {
        $iphone = Iphone::find($id);
        if (is_null($iphone)){
            return response()->json(['message'=>'Ilyen azonosítóval nem található termék!'], 404);
        }
        $iphone->fill($request->all());
        $iphone->save();
        return response()->json($iphone);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iphone = Iphone::find($id);
        if (is_null($iphone)){
            return response()->json(['message'=>'Ilyen azonosítóval nem található termék!'], 404);
        }
        Iphone::destroy($id);
        return response()->noContent();
    }
}
