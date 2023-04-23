<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *      path="/api/carts",
     *      operationId="getCartsList",
     *      tags={"Cart"},
     *      summary="Listázza az összes kosarat",
     *      description="Listázza az összes kosarat",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/CartsSchema")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Products not found"
     *      )
     * )
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

    /**
     * @OA\Post(
     *     path="/api/carts",
     *     summary="Új kosár létrehozása",
     *     description="Új kosár létrehozása",
     *     tags={"Cart"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Új kosár adatai",
     *         @OA\JsonContent(ref="#/components/schemas/CartsSchema"),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="A kosár sikeresen létrejött",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 description="Az üzenet",
     *                 example="Sikeresen hozzáadva!"
     *             )
     *         )
     *     )
     * )
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

    /**
     * @OA\Get(
     *     path="/api/carts/{id}/edit",
     *     summary="Kosár keresése",
     *     description="Visszaadja a keresett kosár adatait",
     *     tags={"Cart"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Keresett kosár azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Visszaadja a keresett kosarat",
     *         @OA\JsonContent(ref="#/components/schemas/CartsSchema"),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Product not found"
     *     )
     * )
     */
    public function show($id)
    {
        $cart = Cart::find($id);
        if (is_null($cart)) {
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

    /**
     * @OA\Put(
     *     path="/api/carts/{id}",
     *     tags={"Cart"},
     *     summary="Kosár szerkesztése",
     *     description="Frissíti a keresett kosár adatait",
     *     operationId="updateCart",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Frissíteni kívánt kosár azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/CartsSchema"),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Product updated successfully",
     *         @OA\JsonContent(ref="#/components/schemas/CartsSchema"),
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Invalid input"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Product not found"
     *     ),
     * )
     */
    public function update(UpdateCartRequest $request, $id)
    {
        $cart = Cart::find($id);
        if (is_null($cart)) {
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

    /**
     * @OA\Delete(
     *     path="/api/carts/{id}",
     *     summary="Kosár törlése",
     *     description="Törli a keresett kosarat",
     *     tags={"Cart"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Törölni kívánt termék azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Cart deleted successfully"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Cart not found"
     *     ),
     *     @OA\Response(
     *         response="500",
     *         description="Server Error"
     *     )
     * )
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        if (is_null($cart)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        Cart::destroy($id);
        return response()->noContent();
    }
}
