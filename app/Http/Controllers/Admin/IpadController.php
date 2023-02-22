<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIpadRequest;
use App\Http\Requests\UpdateIpadRequest;
use App\Models\Category;
use App\Models\Ipad;
use Illuminate\Support\Facades\File;


class IpadController extends Controller
{
    public function index(){
        $ipads = Ipad::all();
        return view('admin.ipads.index', compact('ipads'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.ipads.create', compact('categories'));
    }

    public function store(StoreIpadRequest $request){
        $ipad = new Ipad();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/uploads/ipads', $filename);
            $ipad->image = $filename;
        }
        $ipad->category_id = $request->input('category_id');
        $ipad->model = $request->input('model');
        $ipad->color = $request->input('color');
        $ipad->storage = $request->input('storage');
        $ipad->cellular = $request->input('cellular') == true ? '1' : '0';
        $ipad->description = $request->input('description');
        $ipad->popular = $request->input('popular') == true ? '1' : '0';
        $ipad->status = $request->input('status') == true ? '1' : '0';
        $ipad->price = $request->input('price');
        $ipad->stock = $request->input('stock');
        $ipad->save();
        return redirect('ipads')->with('message', "Sikeresen hozzáadva!");
    }

    public function show(Ipad $kategoria){
        //
    }

    public function edit($id){
        $ipad = Ipad::find($id);
        if (is_null($ipad)){
            return response()->json(["message" => "Ilyen azonosítóval nem található táblagép!"], 404);
        }
        $categories = Category::all();
        return view('admin.ipads.edit', compact(['ipad', 'categories']));
    }

    public function update(UpdateIpadRequest $request, $id){
        $ipad = Ipad::find($id);
        if (is_null($ipad)){
            return response()->json(["message" => "Ilyen azonosítóval nem található táblagép!"], 404);
        }
        if($request->hasFile('image')){
            $path = 'img/uploads/ipads/'.$ipad->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/uploads/ipads', $filename);
            $ipad->image = $filename;
        }
        $ipad->category_id = $request->input('category_id');
        $ipad->model = $request->input('model');
        $ipad->color = $request->input('color');
        $ipad->storage = $request->input('storage');
        $ipad->cellular = $request->input('cellular') == true ? '1' : '0';
        $ipad->description = $request->input('description');
        $ipad->popular = $request->input('popular') == true ? '1' : '0';
        $ipad->status = $request->input('status') == true ? '1' : '0';
        $ipad->price = $request->input('price');
        $ipad->stock = $request->input('stock');
        $ipad->update();
        return redirect('ipads')->with('message', "A termék adatainak módosítása sikeres!");
    }

    public function destroy($id){
        $ipad = Ipad::find($id);
        if (is_null($ipad)){
            return response()->json(["message" => "Ilyen azonosítóval nem található táblagép!"], 404);
        }
        if($ipad->image){
            $path = 'img/uploads/ipads/'.$ipad->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $ipad->delete();
        return redirect('ipads')->with('message', "A termék törlése sikeres!");
    }
}
