<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index() {
        $letters = ['A', 'B', 'C'];
        $popular_products = DB::table('products')->where('popular', 1)->get();
        return view('frontend.index', compact(['popular_products', 'letters']));
    }

    public function filter(Request $request, $category_id){
        $modelCheck = $request->input('models');
        $storageCheck = $request->input('storages');
        $colorCheck = $request->input('colors');

        $products = array();
        $productsAll = array();
        $selected = array();

        if($modelCheck && !$storageCheck && !$colorCheck){
            $products = DB::table('products')->where('category_id', $category_id)->whereIn('model', $modelCheck)->get();
        } elseif (!$modelCheck && $storageCheck && !$colorCheck){
            $products = DB::table('products')->where('category_id', $category_id)->whereIn('storage', $storageCheck)->get();
        } elseif (!$modelCheck && !$storageCheck && $colorCheck){
            $products = DB::table('products')->where('category_id', $category_id)->whereIn('color', $colorCheck)->get();
        } elseif ($modelCheck && $storageCheck && !$colorCheck){
            $productsAll = DB::table('products')->where('category_id', $category_id)->whereIn('model', $modelCheck)->get();
            foreach($productsAll as $product){
                if (in_array($product->storage, $storageCheck)){
                    array_push($products, $product);
                }
            }
        } elseif ($modelCheck && !$storageCheck && $colorCheck){
            $productsAll = DB::table('products')->where('category_id', $category_id)->whereIn('model', $modelCheck)->get();
            foreach($productsAll as $product){
                if (in_array($product->color, $colorCheck)){
                    array_push($products, $product);
                }
            }
        } elseif (!$modelCheck && $storageCheck && $colorCheck){
            $productsAll = DB::table('products')->where('category_id', $category_id)->whereIn('storage', $storageCheck)->get();
            foreach($productsAll as $product){
                if (in_array($product->color, $colorCheck)){
                    array_push($products, $product);
                }
            }
        } elseif ($modelCheck && $storageCheck && $colorCheck){
            $productsAll = DB::table('products')->where('category_id', $category_id)->whereIn('model', $modelCheck)->get();
            foreach($productsAll as $product){
                if (in_array($product->storage, $storageCheck)){
                    array_push($selected, $product);
                }
            }
            foreach($selected as $product){
                if (in_array($product->color, $colorCheck)){
                    array_push($products, $product);
                }
            }
        }
        return $products;
    }

    public function products(Request $request, $category) {
        $categories = Category::all();
        $letters = ['A', 'B', 'C'];
        $category_id = $category;
        $modelCheck = $request->input('models');
        $storageCheck = $request->input('storages');
        $colorCheck = $request->input('colors');

        $modelNames = DB::table('products')->select('model')->where('category_id', $category_id)->groupBy('model')->orderByDesc('model')->get();
        $modelStorages = DB::table('products')->select('storage')->where('category_id', $category_id)->groupBy('storage')->get();
        $modelColors = DB::table('products')->select('color')->where('category_id', $category_id)->groupBy('color')->get();

        $filter = FrontendController::filter($request, $category_id);

        if(count($filter) == 0){
            if (is_null($modelCheck) && is_null($storageCheck) && is_null($colorCheck)){
                $products = DB::table('products')->where('category_id', $category_id)->get();
                return view('frontend.products', compact(['products', 'letters', 'categories', 'modelNames', 'modelStorages', 'modelColors']));
            } else {
                $errorMessage = "Nem található olyan termék, ami megfelelne a keresési feltételeknek!";
                return view('frontend.components.error', compact(['modelNames', 'modelStorages', 'modelColors', 'errorMessage']))->with(['status' => " Sikeresen hozzáadva a kosárhoz!", 'icon' => "success"]);
            }
        } else {
            $products = $filter;
            return view('frontend.products', compact(['products', 'letters', 'categories', 'modelNames', 'modelStorages', 'modelColors']));
        }
    }

    public function show_product($id) {
        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(["message" => "Ilyen azonosítóval nem található termék!", 'icon' => "error"], 404);
        }
        return view('frontend.show_product', compact('product'));
    }

    public function aszf() {
        return view('frontend.footer_components.aszf');
    }

    public function info() {
        return view('frontend.footer_components.info');
    }

    public function shops(Request $request) {
        return view('frontend.footer_components.shops');
    }

    public function shipping() {
        return view('frontend.footer_components.shipping');
    }

    // Rendelések

    public function indexOrders(){
        $orders = Order::where('user_id', Auth::id())->get();
        return view('frontend.orders_index', compact('orders'));
    }

    public function showOrder($id){
        $order = Order::where('id', $id)->where('user_id', Auth::id())->first();
        return view('frontend.show_order', compact('order'));
    }

    public function userSettings(){
        return view('frontend.user_settings');
    }

    public function updateUsersDatas(Request $request){
        $user = User::where('id', Auth::id())->first();
        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->email = $request->input('email');
        $user->postal_code = $request->input('postal_code');
        $user->city = $request->input('city');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        $user->update();

        return view('frontend.settings_response')->with(['status' => "Adatait sikeresen módosította!", 'icon' => "success"]);
    }

}
