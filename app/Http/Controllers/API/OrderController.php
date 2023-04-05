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
    public function show($id)
    {
        $order = Order::find($id);
        if (is_null($order)){
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
    public function update(UpdateOrderRequest $request, $id)
    {
        $order = Order::find($id);
        if (is_null($order)){
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
    public function destroy($id)
    {
        $order = Order::find($id);
        if (is_null($order)){
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord"], 404);
        }
        Order::destroy($id);
        return response()->noContent();
    }
}
