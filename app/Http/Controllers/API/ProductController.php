<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *      path="/api/products",
     *      operationId="getProductsList",
     *      tags={"Product"},
     *      summary="Listázza az összes terméket",
     *      description="Listázza az összes terméket",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/ProductsSchema")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Products not found"
     *      )
     * )
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Post(
     *     path="/api/products",
     *     summary="Új termék létrehozása",
     *     description="Új termék létrehozása",
     *     tags={"Product"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Új termék adatai",
     *         @OA\JsonContent(ref="#/components/schemas/ProductsSchema"),
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *         )
     *
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="A termék sikeresen létrejött",
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
    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/products/{id}/edit",
     *     summary="Termék keresése",
     *     description="Visszaadja a keresett termék adatait",
     *     tags={"Product"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Keresett termék azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Visszaadja a keresett kategóriát",
     *         @OA\JsonContent(ref="#/components/schemas/ProductsSchema"),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Product not found"
     *     )
     * )
     */
    public function show($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json(['message' => 'Ilyen azonosítóval nem található termék!'], 404);
        }
        return response()->json($product, 201);
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
     *     path="/api/products/{id}",
     *     tags={"Product"},
     *     summary="Termék szerkesztése",
     *     description="Frissíti a keresett termék adatait",
     *     operationId="updateProduct",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Frissíteni kívánt termék azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/ProductsSchema"),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Product updated successfully",
     *         @OA\JsonContent(ref="#/components/schemas/ProductsSchema"),
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
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json(['message' => 'Ilyen azonosítóval nem található termék!'], 404);
        }
        $product->fill($request->all());
        $product->save();
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/products/{id}",
     *     summary="Termék törlése",
     *     description="Törli a keresett terméket",
     *     tags={"Product"},
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
     *         description="Product deleted successfully"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Product not found"
     *     ),
     *     @OA\Response(
     *         response="500",
     *         description="Server Error"
     *     )
     * )
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json(['message' => 'Ilyen azonosítóval nem található termék!'], 404);
        }
        Product::destroy($id);
        return response()->noContent();
    }
}
