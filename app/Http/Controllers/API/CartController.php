<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::all();
        return response()->json($carts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        $cart = new Cart();
        $cart->fill($request->all());
        $cart->save();
        return response()->json($cart, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = Cart::find($id);
        if (is_null($cart)){
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        return response()->json($cart, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, $id)
    {
        $cart = Cart::find($id);
        if (is_null($cart)){
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        $cart->fill($request->all());
        $cart->save();
        return response()->json($cart);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        if (is_null($cart)){
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        Cart::destroy($id);
        return response()->noContent();
    }
}


