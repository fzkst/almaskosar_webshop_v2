<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderItemRequest;
use App\Http\Requests\UpdateOrderItemRequest;
use App\Models\OrderItem;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class Order_itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *      path="/api/order_items",
     *      operationId="getOrderItemsList",
     *      tags={"OrderItems"},
     *      summary="Listázza az összes rendelés termékeit",
     *      description="Listázza az összes rendelés termékeit",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/OrderItemsSchema")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Order Items not found"
     *      )
     * )
     */
    public function index()
    {
        $order_items = OrderItem::all();
        return response()->json($order_items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Post(
     *     path="/api/order_items",
     *     summary="Új termék hozzáadása a rendelésekhez",
     *     description="Új termék hozzáadása a rendelésekhez",
     *     tags={"OrderItems"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="A rendeléshez hozzáadott termék adatai",
     *         @OA\JsonContent(ref="#/components/schemas/OrderItemsSchema"),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="A terméket sikeresen hozzáadta a rendeléshez",
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
    public function store(StoreOrderItemRequest $request)
    {
        $order_item = new OrderItem();
        $order_item->fill($request->all());
        $order_item->save();
        return response()->json($order_item, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/order_items/{id}/edit",
     *     summary="Rendelt termék keresése",
     *     description="Visszaadja a keresett termék adatait",
     *     tags={"OrderItems"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Keresett kategória azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Visszaadja a keresett termék adatait",
     *         @OA\JsonContent(ref="#/components/schemas/OrderItemsSchema"),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Order item not found"
     *     )
     * )
     */
    public function show($id)
    {
        $order_item = OrderItem::find($id);
        if (is_null($order_item)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        return response()->json($order_item, 201);
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
     *     path="/api/order_items/{id}",
     *     tags={"OrderItems"},
     *     summary="Rendelt termék szerkesztése",
     *     description="Frissíti a keresett termék adatait",
     *     operationId="updateOrderItems",
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
     *         @OA\JsonContent(ref="#/components/schemas/OrderItemsSchema"),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Order item updated successfully",
     *         @OA\JsonContent(ref="#/components/schemas/OrderItemsSchema"),
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Invalid input"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Order item not found"
     *     ),
     * )
     */
    public function update(UpdateOrderItemRequest $request, $id)
    {
        $order_item = OrderItem::find($id);
        if (is_null($order_item)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        $order_item->fill($request->all());
        $order_item->save();
        return response()->json($order_item);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/order_items/{id}",
     *     summary="Termék törlése",
     *     description="Törli a keresett rendelési terméket a rendelésből",
     *     tags={"Category"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Törölni kívánt rendelési termék azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Order item deleted successfully"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Order item not found"
     *     ),
     *     @OA\Response(
     *         response="500",
     *         description="Server Error"
     *     )
     * )
     */
    public function destroy($id)
    {
        $order_item = OrderItem::find($id);
        if (is_null($order_item)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        OrderItem::destroy($id);
        return response()->noContent();
    }
}
