<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(StoreProductRequest $request){
        $product = new Product();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/uploads/products', '/A'.$filename);   //$file->move('img/uploads/products', $filename);
            $product->image = $filename;
        }
        $product->category_id = $request->input('category_id');
        $product->model = $request->input('model');
        $product->color = $request->input('color');
        $product->cpu = $request->input('cpu');
        $product->memory = $request->input('memory');
        $product->storage = $request->input('storage');
        $product->cellular = $request->input('cellular');
        $product->description = $request->input('description');
        $product->popular = $request->input('popular') == true ? '1' : '0';
        $product->status = $request->input('status') == true ? '1' : '0';
        $product->price = $request->input('price');
        $product->sale_price = $request->input('sale_price');
        $product->stock = $request->input('stock');
        $product->save();
        return redirect('products')->with('message', "Sikeresen hozzáadva!");
    }

    public function show(Product $kategoria){
        //
    }

    public function edit($id){
        $product = Product::find($id);
        if (is_null($product)){
            return response()->json(["message" => "Ilyen azonosítóval nem található termék!"], 404);
        }
        $categories = Category::all();
        return view('admin.products.edit', compact(['product', 'categories']));
    }

    public function update(UpdateProductRequest $request, $id){
        $product = Product::find($id);
        if (is_null($product)){
            return response()->json(["message" => "Ilyen azonosítóval nem található termék!"], 404);
        }
        if($request->hasFile('image')){
            $path = 'img/uploads/products/'.$product->image;
            if(File ::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/uploads/iphones', '/A'.$filename);
            $product->image = $filename;
        }
        $product->category_id = $request->input('category_id');
        $product->model = $request->input('model');
        $product->color = $request->input('color');
        $product->cpu = $request->input('cpu');
        $product->memory = $request->input('memory');
        $product->storage = $request->input('storage');
        $product->cellular = $request->input('cellular');
        $product->description = $request->input('description');
        $product->popular = $request->input('popular') == true ? '1' : '0';
        $product->status = $request->input('status') == true ? '1' : '0';
        $product->price = $request->input('price');
        $product->sale_price = $request->input('sale_price');
        $product->stock = $request->input('stock');
        $product->update();
        return redirect('products')->with('message', "A termék adatainak módosítása sikeres!");
    }

    public function destroy($id){
        $product = Product::find($id);
        if (is_null($product)){
            return response()->json(["message" => "Ilyen azonosítóval nem található termék!"], 404);
        }
        if($product->image){
            $path = 'img/uploads/products/A'.$product->image;        
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $product->delete();
        return redirect('products')->with('message', "A termék törlése sikeres!");
    }
}
