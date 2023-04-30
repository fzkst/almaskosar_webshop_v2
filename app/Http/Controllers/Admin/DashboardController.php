<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /***
     * Listázza a kategóriák tábla összes elemét.
     *
     * Statisztikai adatokat gyűjt az adatbázisból, majd visszatér az admin.index oldallal a lekért adatokkal.
     */
    public function index()
    {
        $products = Product::all();
        $users = User::all();
        $adatok = User::select('last_name')->where('city', 'LIKE', '%Budapest%')->get();
        $adatok3 = DB::table('products')->select('color')->where('storage', 'LIKE', '128')->get();
        $usersCity = DB::table('users')->select('city')->groupBy('city')->count();
        $usersCity2 = DB::table('users')->select(DB::raw('count(*) as id_count, city'))->groupBy('city')->get();
        $keszletek = DB::table('products')->where('stock', '<=', 1)->get();
        return view('admin.index', compact(['users', 'products', 'usersCity2', 'adatok', 'keszletek']));
    }

    /***
     * Az adatbázisban található összes termék száma
     */
    public function productsSize(){
        $products = Product::all();
        $products_size = count($products);
        return response()->json(['products_size' => $products_size]);
    }
}
