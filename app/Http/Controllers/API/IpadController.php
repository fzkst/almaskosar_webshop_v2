<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIpadRequest;
use App\Http\Requests\UpdateIpadRequest;
use App\Models\Ipad;
use Illuminate\Http\Request;

class IpadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ipads = Ipad::all();
        return response()->json($ipads);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIpadRequest $request)
    {
        $ipad = new Ipad();
        $ipad->fill($request->all());
        $ipad->save();
        return response()->json($ipad, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ipad = Ipad::find($id);
        if (is_null($ipad)){
            return response()->json(['message'=>'Ilyen azonosítóval nem található termék!'], 404);
        }
        return response()->json($ipad, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIpadRequest $request, $id)
    {
        $ipad = Ipad::find($id);
        if (is_null($ipad)){
            return response()->json(['message'=>'Ilyen azonosítóval nem található termék!'], 404);
        }
        $ipad->fill($request->all());
        $ipad->save();
        return response()->json($ipad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ipad = Ipad::find($id);
        if (is_null($ipad)){
            return response()->json(['message'=>'Ilyen azonosítóval nem található termék!'], 404);
        }
        Ipad::destroy($id);
        return response()->noContent();
    }
}
