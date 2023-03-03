<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $felhasznalok = Customer::all();
        $adatok = Customer::select('last_name')->where('city', 'LIKE', '%Budapest%')->get();
        return view('admin.index', compact(['felhasznalok', 'products', 'adatok']));
    }
}
