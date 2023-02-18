<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/uploads/categories', $filename);
            $category->image = $filename;

        }

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == true ? '1' : '0';
        $category->popular = $request->input('popular') == true ? '1' : '0';
        $category->save();
        return redirect('categories')->with('message', "Sikeresen hozzáadva!");
    }

    public function show(Category $category){
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        if($request->hasFile('image')){
            $path = 'img/uploads/categories/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/uploads/categories', $filename);
            $category->kepfajl = $filename;
        }
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == true ? '1' : '0';
        $category->popular = $request->input('popular') == true ? '1' : '0';
        $category->update();
        return redirect('categories')->with('message', "A kategória módosítása sikeres!");
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(["message" => "Ilyen azonosítóval nem található kategória!"], 404);
        }
        if($category->kepfajl){
            $path = 'img/uploads/categories/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        //Category::destroy($id);
        $category->delete();
        return redirect('categories')->with('message', "A kategória törlése sikeres!");
    }
}
