<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *      path="/api/users",
     *      operationId="getUsersList",
     *      tags={"User"},
     *      summary="Listázza az összes felhasználót",
     *      description="Listázza az összes felhasználót",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/UsersSchema")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Users not found"
     *      )
     * )
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Post(
     *     path="/api/users",
     *     summary="Új felhasználó létrehozása",
     *     description="Új felhasználó létrehozása",
     *     tags={"Category"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Új felhasználó adatai",
     *         @OA\JsonContent(ref="#/components/schemas/UsersSchema"),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="A felhasználó sikeresen létrejött",
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
    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();
        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/users/{id}/edit",
     *     summary="Felhasználó keresése",
     *     description="Visszaadja a keresett felhasználó adatait",
     *     tags={"User"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Keresett felhasználó azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Visszaadja a keresett felhasználót",
     *         @OA\JsonContent(ref="#/components/schemas/UsersSchema"),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found"
     *     )
     * )
     */
    public function show($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található felhasználó!"], 404);
        }
        return response()->json($user, 201);
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
     *     path="/api/users/{id}",
     *     tags={"User"},
     *     summary="Felhasználó szerkesztése",
     *     description="Frissíti a keresett felhasználó adatait",
     *     operationId="updateUser",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Frissíteni kívánt felhasználó azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/UsersSchema"),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="User updated successfully",
     *         @OA\JsonContent(ref="#/components/schemas/UsersSchema"),
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Invalid input"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="User not found"
     *     ),
     * )
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található felhasználó!"], 404);
        }
        $user->fill($request->all());
        $user->save();
        return response()->json($user, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/users/{id}",
     *     summary="Felhasználó törlése",
     *     description="Törli a keresett felhasználót",
     *     tags={"User"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Törölni kívánt felhasználó azonosítója",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="User deleted successfully"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="User not found"
     *     ),
     *     @OA\Response(
     *         response="500",
     *         description="Server Error"
     *     )
     * )
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(["message" => "Ilyen azonosítóval nem található felhasználó!"], 404);
        }
        User::destroy($id);
        return response()->noContent();
    }
}
