<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Iphone;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request){

        $category_id = $request->input('category_id');
        $product_id = $request->input('product_id');
        $product_quantity = $request->input('product_quantity');


        if(Auth::check()){

            $product_check = Product::where('id', $product_id)->first();

            if($product_check){
                if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['status' => "Az ".$product_check->model." már a kosárban van!\n
                    Ha többet szeretne vásárolni, lehetősége lesz módosítani a mennyiséget a megrendelésnél.", 'icon' => "info"]);
                }
                else
                {
                    $cartItem = new Cart();
                    $cartItem->user_id = Auth::id();
                    $cartItem->category_id = $category_id;
                    $cartItem->product_id = $product_id;
                    $cartItem->product_quantity = $product_quantity;
                    $cartItem->save();
                    return response()->json(['status' => $product_check->model." Sikeresen hozzáadva a kosárhoz!", 'icon' => "success"]);
                }

            }

        }
        else {
            return response()->json(['status' => "A vásárláshoz bejelentkezés szükséges!", 'icon' => "error"]);
        }
    }

    public function updateProduct(Request $request) {

        $product_id = $request->input('product_id');
        $product_quantity = $request->input('product_quantity');

        if (Auth::check()){

            if (Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists()){
                $cartItem = Cart::where('product_id', $product_id)->where('user_id', Auth::id())->first();
                $cartItem->product_quantity = $product_quantity;
                $cartItem->update();
                return response()->json(['status' => 'A mennyiség módosítása sikeres!', 'icon' => "success"]);
            }
        }
    }


    public function indexCart(){
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.cart', compact('cartItems'));
    }


    public function deleteProduct(Request $request){
        if (Auth::check()){
            $product_id = $request->input('product_id');
            if (Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists()){
                $cartItem = Cart::where('product_id', $product_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' => 'A termék törlése sikeres!', 'icon' => "success"]);
            }
        }
        else {
            return response()->json(['status' => "Előbb jelentkezzen be!", 'icon' => "error"]);
        }

    }

}
