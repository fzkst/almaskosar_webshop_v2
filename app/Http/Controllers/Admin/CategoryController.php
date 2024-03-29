<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    /***
     * Listázza a kategóriák tábla összes elemét.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /***
     * Vissazaad egy űrlapot, amin új kategóriát lehet létrehozni.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /***
     * Hozzáadja az adatbázishoz az új kategóriát, az űrlapon megadott adatokkal.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('img/uploads/categories', $filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->table_name = $request->input('table_name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == true ? '1' : '0';
        $category->popular = $request->input('popular') == true ? '1' : '0';
        $category->save();
        return redirect('categories')->with('message', "Sikeresen hozzáadva!");
    }

    public function show(Category $category)
    {
        //
    }

    /***
     * Vissazaad egy űrlapot, amin szerkeszteni lehet a kiválasztott kategóriát.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /***
     * Frissíti a kiválasztott kategória adatait az adatbázisban, az űrlapon megadott adatokkal.
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('image')) {
            $path = 'img/uploads/categories/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('img/uploads/categories', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->table_name = $request->input('table_name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == true ? '1' : '0';
        $category->popular = $request->input('popular') == true ? '1' : '0';
        $category->update();
        return redirect('categories')->with('message', "A kategória módosítása sikeres!");
    }

    /***
     * Törli a kiválasztott kategóriát az adatbázisból.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található kategória!"], 404);
        }
        if ($category->kepfajl) {
            $path = 'img/uploads/categories/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('categories')->with('message', "A kategória törlése sikeres!");
    }
}
