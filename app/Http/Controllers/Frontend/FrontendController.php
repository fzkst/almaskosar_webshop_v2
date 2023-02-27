<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        $letters = ['A', 'B', 'C'];
        $iphones = DB::table('products')->where('category_id', 1)->get();
        return view('frontend.iphones', compact(['iphones', 'letters']));
    }
    public function ipads() {
        $letters = ['A', 'B', 'C'];
        $ipads = DB::table('products')->where('category_id', 2)->get();
        return view('frontend.ipads', compact(['ipads', 'letters']));
    }
    public function macbooks() {
        $macbooks = DB::table('products')->where('category_id', 3)->get();
        return view('frontend.macbooks', compact('macbooks'));
    }

    public function show_iphone($id) {
        //$product = DB::table('products')->where('id', $id)->get();
        $product = Product::find($id);
        //$iphone = Iphone::find($id);
        if(is_null($product)){
            return response()->json(["message" => "Ilyen azonosítóval nem található termék!"], 404);
        }
        return view('frontend.show_iphone', compact('product'));
    }
}
