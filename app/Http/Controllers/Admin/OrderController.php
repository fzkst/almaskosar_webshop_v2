<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /***
     * Listázza a rendelések tábla összes elemét.
     */
    public function index(){
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    /***
     * Visszaadja a kiválasztott rendelést.
     */
    public function show($id){
        $order = Order::find($id);
        if (is_null($order)){
            return response()->json(["message" => "Ilyen azonosítóval nem található termék!", 'icon' => "error"], 404);
        }
        return view('admin.orders.show_order', compact('order'));
    }

    /***
     * Visszaadja egy megadott felhasználó összes rendelését.
     */
    public function showUserOrders($id){
        $orders = Order::where('user_id', $id)->get();
        $user = User::where('id', $id)->first();
        if (is_null($orders)){
            return response()->json(["message" => "Ilyen azonosítóval nem található rendelés!", 'icon' => "error"], 404);
        }
        return view('admin.users.show_user_orders', compact(['orders', 'user']));

    }

    /***
     * Vissazaad egy űrlapot, amin szerkeszteni lehet a kiválasztott rendelést.
     */
    public function editOrder($id){
        $order = Order::find($id);
        if (is_null($order)){
            return response()->json(["message" => "Ilyen azonosítóval nem található rendelés!", 'icon' => "error"], 404);
        }
        return view('admin.orders.edit_order', compact('order'));
    }

    /***
     * Frissíti a kiválasztott rendelést az adatbázisban, az űrlapon megadott adatokkal.
     */
    public function updateOrder(Request $request, $id){
        $order = Order::where('id', $id)->first();
        if (is_null($order)){
            return response()->json(["message" => "Ilyen azonosítóval nem található rendelés!", 'icon' => "error"], 404);
        }
        $order->last_name = $request->input('last_name');
        $order->first_name = $request->input('first_name');
        $order->email = $request->input('email');
        $order->postal_code = $request->input('postal_code');
        $order->city = $request->input('city');
        $order->address = $request->input('address');
        $order->phone_number = $request->input('phone_number');
        $order->status = $request->input('status') == true ? '1' : '0';
        $order->message = $request->input('message');
        $order->update();
        return redirect('/dashboard')->with(["message" => "A rendelés adatainak módosítása sikeres!", 'icon' => "success"], 201);
    }

}
