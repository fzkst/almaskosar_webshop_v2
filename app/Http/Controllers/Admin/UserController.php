<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /***
     * Listázza a felhasználók tábla összes elemét.
     */
    public function index(){
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /***
     * Vissazaad egy űrlapot, amin új felhasználót lehet létrehozni.
     */
    public function create(){
        return view('admin.users.create');
    }

    /***
     * Hozzáadja az adatbázishoz az új felhasználót, az űrlapon megadott adatokkal.
     */
    public function store(StoreUserRequest $request){
        $user = new User();
        $user->name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->email = $request->input('email');
        $user->password = Hash::make(Str::random(8));
        $user->postal_code = $request->input('postal_code');
        $user->city = $request->input('city');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        $user->customer_code = $request->input('customer_code');
        $user->email_verified_at = now();
        $user->save();
        return redirect('users')->with('message', "Sikeresen hozzáadva!");
    }

    public function show(User $kategoria){
        //
    }

    /***
     * Vissazaad egy űrlapot, amin szerkeszteni lehet a kiválasztott felhasználó adatait.
     */
    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    /***
     * Frissíti a kiválasztott felhasználó adatait az űrlapon megadott adatokkal az adatbázisban.
     */
    public function update(UpdateUserRequest $request, $id){
        $user = User::find($id);
        $user->name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->email = $request->input('email');
        $user->postal_code = $request->input('postal_code');
        $user->city = $request->input('city');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        $user->customer_code = $request->input('customer_code');
        $user->update();
        return redirect('users')->with('message', "A felhasználó adatainak módosítása sikeres!");
    }

    /***
     * Törlia a kiválasztott felhasználót az adatbázisból.
     */
    public function destroy($id){
        $felhasznalo = User::find($id);
        if(is_null($felhasznalo)){
            return response()->json(["message" => "Ilyen azonosítóval nem található felhasználó!"], 404);
        }
        $felhasznalo->delete();
        return redirect('users')->with('message', "A felhasználó törlése sikeres!");
    }
}
