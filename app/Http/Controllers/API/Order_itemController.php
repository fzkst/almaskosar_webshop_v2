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
    public function show($id)
    {
        $order_item = OrderItem::find($id);
        if (is_null($order_item)){
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
    public function update(UpdateOrderItemRequest $request, $id)
    {
        $order_item = OrderItem::find($id);
        if (is_null($order_item)){
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
    public function destroy($id)
    {
        $order_item = OrderItem::find($id);
        if (is_null($order_item)){
            return response()->json(["message" => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        OrderItem::destroy($id);
        return response()->noContent();
    }
}
