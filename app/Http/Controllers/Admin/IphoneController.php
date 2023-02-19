<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIphoneRequest;
use App\Http\Requests\UpdateIphoneRequest;
use App\Models\Category;
use App\Models\Iphone;
use Illuminate\Support\Facades\File;


class IphoneController extends Controller
{
    public function index(){
        $iphones = Iphone::all();
        return view('admin.iphones.index', compact('iphones'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.iphones.create', compact('categories'));
    }

    public function store(StoreIphoneRequest $request){
        $iphone = new Iphone();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/uploads/iphones', $filename);
            $iphone->image = $filename;
        }
        $iphone->category_id = $request->input('category_id');
        $iphone->model = $request->input('model');
        $iphone->color = $request->input('color');
        $iphone->storage = $request->input('storage');
        $iphone->description = $request->input('description');
        $iphone->popular = $request->input('popular') == true ? '1' : '0';
        $iphone->status = $request->input('status') == true ? '1' : '0';
        $iphone->price = $request->input('price');
        $iphone->stock = $request->input('stock');
        $iphone->save();
        return redirect('iphones')->with('message', "Sikeresen hozzáadva!");
    }

    public function show(Iphone $kategoria){
        //
    }

    public function edit($id){
        $iphone = Iphone::find($id);
        if (is_null($iphone)){
            return response()->json(["message" => "Ilyen azonosítóval nem található iPhone!"], 404);
        }
        return view('admin.iphones.edit', compact('iphone'));
    }

    public function update(UpdateIphoneRequest $request, $id){
        $iphone = Iphone::find($id);
        if (is_null($iphone)){
            return response()->json(["message" => "Ilyen azonosítóval nem található iPhone!"], 404);
        }
        if($request->hasFile('image')){
            $path = 'img/uploads/iphones/'.$iphone->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/uploads/iphones', $filename);
            $iphone->image = $filename;
        }
        $iphone->category_id = $request->input('category_id');
        $iphone->model = $request->input('model');
        $iphone->color = $request->input('color');
        $iphone->storage = $request->input('storage');
        $iphone->description = $request->input('description');
        $iphone->popular = $request->input('popular') == true ? '1' : '0';
        $iphone->status = $request->input('status') == true ? '1' : '0';
        $iphone->price = $request->input('price');
        $iphone->stock = $request->input('stock');
        $iphone->update();
        return redirect('iphones')->with('message', "A termék adatainak módosítása sikeres!");
    }

    public function destroy($id){
        $iphone = Iphone::find($id);
        if (is_null($iphone)){
            return response()->json(["message" => "Ilyen azonosítóval nem található iPhone!"], 404);
        }
        if($iphone->image){
            $path = 'img/uploads/iphones/'.$iphone->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $iphone->delete();
        return redirect('iphones')->with('message', "A termék törlése sikeres!");
    }
}
