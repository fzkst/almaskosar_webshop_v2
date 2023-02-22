<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ipad;
use App\Models\Iphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class FrontendController extends Controller
{
    public function index() {
        $pop_iphones = DB::table('iphones')->where('popular', 1)->get()->toArray();
        $pop_ipads = DB::table('ipads')->where('popular', 1)->get()->toArray();
        $popular_products = array_merge($pop_iphones, $pop_ipads);
        return view('frontend.index', compact('popular_products'));
    }

    public function iphones() {
        $iphones = Iphone::all();
        return view('frontend.iphones', compact('iphones'));
    }

    public function show_iphone($id) {
        $iphone = Iphone::find($id);
        if(is_null($iphone)){
            return response()->json(["message" => "Ilyen azonosítóval nem található iPhone!"], 404);
        }
        return view('frontend.show_iphone', compact('iphone'));
    }
}
