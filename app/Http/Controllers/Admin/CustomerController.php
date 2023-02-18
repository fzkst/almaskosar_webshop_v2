<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('admin.customers.index', compact('customers'));
    }

    public function create(){
        return view('admin.customers.create');
    }

    public function store(StoreCustomerRequest $request){
        $customer = new Customer();
        $customer->user_id = $request->input('user_id');
        $customer->person = $request->input('person')  == true ? '1' : '0';
        if ($request->input('person')) {
            $customer->last_name = $request->input('last_name');
            $customer->first_name = $request->input('first_name');
        } else {
            $customer->company = $request->input('company');
            $customer->tax_number = $request->input('tax_number');
        }
        $customer->postal_code = $request->input('postal_code');
        $customer->city = $request->input('city');
        $customer->address = $request->input('address');
        $customer->phone_number = $request->input('phone_number');
        $customer->save();
        return redirect('customers')->with('message', "Sikeresen hozzáadva!");
    }

    public function show(Customer $kategoria){
        //
    }

    public function edit($id){
        $customer = Customer::find($id);
        return view('admin.customers.edit', compact('customer'));
    }

    public function update(UpdateCustomerRequest $request, $id){
        $customer = Customer::find($id);
        $customer->user_id = $request->input('user_id');
        $customer->person = $request->input('person')  == true ? '1' : '0';
        $customer->company = $request->input('company');
        $customer->last_name = $request->input('last_name');
        $customer->first_name = $request->input('first_name');
        $customer->postal_code = $request->input('postal_code');
        $customer->city = $request->input('city');
        $customer->address = $request->input('address');
        $customer->phone_number = $request->input('phone_number');
        $customer->tax_number = $request->input('tax_number');
        $customer->update();
        return redirect('customers')->with('message', "A felhasználó adatainak módosítása sikeres!");
    }

    public function destroy($id){
        $felhasznalo = Customer::find($id);
        if(is_null($felhasznalo)){
            return response()->json(["message" => "Ilyen azonosítóval nem található felhasználó!"], 404);
        }
        $felhasznalo->delete();
        return redirect('customers')->with('message', "A felhasználó törlése sikeres!");
    }
}
