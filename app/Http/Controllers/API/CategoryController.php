<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *      path="/api/categories",
     *      operationId="getCategoriesList",
     *      tags={"Category"},
     *      summary="Listázza az összes kategóriát",
     *      description="Listázza az összes kategóriát",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/CategoriesSchema")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Categories not found"
     *      )
     * )
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Post(
     *     path="/api/categories",
     *     summary="Új kategória létrehozása",
     *     description="Új kategória létrehozása",
     *     tags={"Category"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Új kategória adatai",
     *         @OA\JsonContent(ref="#/components/schemas/CategoriesSchema"),
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="A kategória sikeresen létrejött",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 description="Az üzenet",
     *                 example="Sikeresen hozzáadva!"
     *             )
     *         )
     *     )
     * )
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->fill($request->all());
        $category->save();
        return response()->json($category, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/categories/{id}/edit",
     *     summary="Kategória keresése",
     *     description="Visszaadja a keresett kategória adatait",
     *     tags={"Category"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Keresett kategória azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Visszaadja a keresett kategóriát",
     *         @OA\JsonContent(ref="#/components/schemas/CategoriesSchema"),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Category not found"
     *     )
     * )
     */
    public function show($id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return response()->json(['message:' => 'Ilyen azonosítóval nem található kategória!'], 404);
        }
        return response()->json($category, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Put(
     *     path="/api/categories/{id}",
     *     tags={"Category"},
     *     summary="Kategória szerkesztése",
     *     description="Frissíti a keresett kategória adatait",
     *     operationId="updateCategory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Frissíteni kívánt kategória azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/CategoriesSchema"),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Category updated successfully",
     *         @OA\JsonContent(ref="#/components/schemas/CategoriesSchema"),
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Invalid input"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Category not found"
     *     ),
     * )
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return response()->json(['message:' => 'Ilyen azonosítóval nem található kategória!'], 404);
        }
        $category->fill($request->all());
        $category->save();
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/categories/{id}",
     *     summary="Kategória törlése",
     *     description="Törli a keresett kategóriát",
     *     tags={"Category"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Törölni kívánt kategória azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Category deleted successfully"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Category not found"
     *     ),
     *     @OA\Response(
     *         response="500",
     *         description="Server Error"
     *     )
     * )
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return response()->json(['message:' => 'Ilyen azonosítóval nem található kategória!'], 404);
        }
        Category::destroy($id);
        return response()->noContent();
    }
}
