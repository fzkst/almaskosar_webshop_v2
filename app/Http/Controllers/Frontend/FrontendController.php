<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class FrontendController extends Controller
{
    public function index() {
        $letters = ['A', 'B', 'C'];
        $popular_products = DB::table('products')->where('popular', 1)->get();
        return view('frontend.index', compact(['popular_products', 'letters']));
    }

    public function iphones() {
        $categories = Category::all();
        $letters = ['A', 'B', 'C'];
        $products = DB::table('products')->where('category_id', 1)->get();
        return view('frontend.products', compact(['products', 'letters', 'categories']));
    }
    public function ipads() {
        $categories = Category::all();
        $letters = ['A', 'B', 'C'];
        $products = DB::table('products')->where('category_id', 2)->get();
        return view('frontend.products', compact(['products', 'letters', 'categories']));
    }
    public function macbooks() {
        $categories = Category::all();
        $letters = ['A', 'B', 'C'];
        $products = DB::table('products')->where('category_id', 3)->get();
        return view('frontend.products', compact(['products', 'letters', 'categories']));
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

    // Szűrés

    public function filter(Request $request){
        $categories = Category::all();
        $letters = ['A', 'B', 'C'];

        $iphone14promax = $request->input('iphone14promax') == true ? 'iPhone 14 Pro Max' : 'semmi';
        $iphone14pro = $request->input('iphone13');
       /* $iphone14plus = $request->input('iphone14promax') == true ? 'iPhone 14 Plus' : '';
        $iphone14 = $request->input('iphone14promax') == true ? 'iPhone 14' : '';
        $iphone13 = $request->input('iphone14promax') == true ? 'iPhone 13' : '';
        $iphone13mini = $request->input('iphone14promax') == true ? 'iPhone 13 Mini' : '';
        $iphone12 = $request->input('iphone14promax') == true ? 'iPhone 12' : '';
        $iphoneSE = $request->input('iphone14promax') == true ? 'iPhone SE' : ''; */

        $products = DB::table('products')->where('model', 'LIKE', 'iPhone 14 Pro Max')->get();
        if(is_null($products)){
            return response()->json(["message" => "Nincs ilyen feltételeknek megfelelő termék!", 'icon' => "error"], 404);
        }
        return view('frontend.products', compact(['products', 'letters', 'categories', 'iphone14pro']));
    }

}
/* ,
            ['model', $iphone14pro],
            ['model', $iphone14plus],
            ['model', $iphone14],
            ['model', $iphone13],
            ['model', $iphone13mini],
            ['model', $iphone12],
            ['model', $iphoneSE] */