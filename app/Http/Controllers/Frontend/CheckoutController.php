<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $allCartItems = Cart::where('user_id', Auth::id())->get();
        foreach($allCartItems as $item){
            if (!Product::where('id', $item->product_id)->where('stock', '>=', $item->product_quantity)->exists()){
                $destroyItem = Cart::where('user_id', Auth::id())->where('product_id', $item->product_id)->first();
                $destroyItem->delete();
            }
        }
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.checkout', compact('cartItems'));
    }


    public function ordering(Request $request){
        $customer_code = rand(11111,99999);

        $order = new Order();
        $order->user_id = Auth::id();
        $order->last_name = $request->input('last_name');
        $order->first_name = $request->input('first_name');
        $order->email = $request->input('email');
        $order->postal_code = $request->input('postal_code');
        $order->city = $request->input('city');
        $order->address = $request->input('address');
        $order->phone_number = $request->input('phone_number');
        $order->customer_code = $customer_code;

        $total = 0;
        $cartitems_total = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems_total as $item){
            $total += $item->products->price;
        }

        $order->total_price = $total;
        $order->status = 0;
        $order->message = $request->input('message');
        $order->tracking_number = "Almáskosár/".rand(1111,9999);
        $order->save();

        $cartItems = Cart::where('user_id', Auth::id())->get(); //a user vásárlásainak kiválogatása
        foreach($cartItems as $item){
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'product_quantity' => $item->product_quantity,
                'price' => $item->products->price
            ]);

            $product = Product::where('id', $item->product_id)->first(); //a kosárban lévő temékének megkeresése az összes termék közül
            //$product->stock = $product->stock - $item->product_quantity;
            $product->stock -= $item->product_quantity;
            $product->update();
        }

        if(Auth::user()->cim == NULL){
            $user = User::where('id', Auth::id())->first();
            $user->last_name = $request->input('last_name');
            $user->first_name = $request->input('first_name');
            $user->email = $request->input('email');
            $user->postal_code = $request->input('postal_code');
            $user->city = $request->input('city');
            $user->address = $request->input('address');
            $user->phone_number = $request->input('phone_number');
            $user->customer_code = $customer_code;
            $user->update();
        }

        $cartItems = Cart::where('user_id', Auth::id())->get(); //termékek eltávolítása a kosárból
        Cart::destroy($cartItems);

        return view('frontend.order_response')->with(['status' => "Sikeresen leadta a rendelését!", 'icon' => "success"]);
    }
}
