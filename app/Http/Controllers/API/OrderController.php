<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *      path="/api/orders",
     *      operationId="getOrdersList",
     *      tags={"Order"},
     *      summary="Listázza az összes megrendelést",
     *      description="Listázza az összes megrendelést",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/OrdersSchema")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Orders not found"
     *      )
     * )
     */
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Post(
     *     path="/api/orders",
     *     summary="Új rendelés létrehozása",
     *     description="Új rendelés létrehozása",
     *     tags={"Order"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Új rendelés adatai",
     *         @OA\JsonContent(ref="#/components/schemas/OrdersSchema"),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="A rendelés sikeresen létrejött",
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
    public function store(StoreOrderRequest $request)
    {
        $order = new Order();
        $order->fill($request->all());
        $order->save();
        return response()->json($order, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/orders/{id}/edit",
     *     summary="Rendelés keresése",
     *     description="Visszaadja a keresett rendelés adatait",
     *     tags={"Category"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Keresett rendelés azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Visszaadja a keresett rendelést",
     *         @OA\JsonContent(ref="#/components/schemas/OrdersSchema"),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Order not found"
     *     )
     * )
     */
    public function show($id)
    {
        $order = Order::find($id);
        if (is_null($order)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord"], 404);
        }
        return response()->json($order, 201);
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
     *     path="/api/orders/{id}",
     *     tags={"Order"},
     *     summary="Rendelés szerkesztése",
     *     description="Frissíti a keresett rendelés adatait",
     *     operationId="updateOrder",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Frissíteni kívánt rendelés azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/OrdersSchema"),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Category updated successfully",
     *         @OA\JsonContent(ref="#/components/schemas/OrdersSchema"),
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Invalid input"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Order not found"
     *     ),
     * )
     */
    public function update(UpdateOrderRequest $request, $id)
    {
        $order = Order::find($id);
        if (is_null($order)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord"], 404);
        }
        $order->fill($request->all());
        $order->save();
        return response()->json($order);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/orders/{id}",
     *     summary="Rendelés törlése",
     *     description="Törli a keresett rendelést",
     *     tags={"Order"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Törölni kívánt rendelés azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Order deleted successfully"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Order not found"
     *     ),
     *     @OA\Response(
     *         response="500",
     *         description="Server Error"
     *     )
     * )
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        if (is_null($order)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord"], 404);
        }
        Order::destroy($id);
        return response()->noContent();
    }
}
