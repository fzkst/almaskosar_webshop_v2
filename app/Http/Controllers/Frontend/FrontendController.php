<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ipad;
use App\Models\Iphone;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class FrontendController extends Controller
{
    public function index() {
        /* $pop_iphones = DB::table('iphones')->where('popular', 1)->get()->toArray();
        $pop_ipads = DB::table('ipads')->where('popular', 1)->get()->toArray();
        $popular_products = array_merge($pop_iphones, $pop_ipads); */
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
        //$product = DB::table('products')->where('id', $id)->get();
        $product = Product::find($id);
        //$iphone = Iphone::find($id);
        if(is_null($product)){
            return response()->json(["message" => "Ilyen azonosítóval nem található termék!"], 404);
        }
        return view('frontend.show_product', compact('product'));
    }

    public function aszf() {
        return view('frontend.footer_components.aszf');
    }

    public function tajekoztato() {
        return view('frontend.footer_components.tajekoztato');
    }

    public function uzletek(Request $request) {
        $req = $request->route()->getName();
        return view('frontend.footer_components.uzletek', compact(['req']));
    }

    public function szallitas() {
        return view('frontend.footer_components.szallitas');
    }

}
