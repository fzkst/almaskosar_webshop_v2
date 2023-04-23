<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
 * @OA\Schema(
 *    schema="CategoriesSchema",
 *    @OA\Property(
 *        property="id",
 *        type="integer",
 *        description="Kategória azonosítója",
 *        nullable=false,
 *        example="1"
 *    ),
 *    @OA\Property(
 *        property="name",
 *        type="string",
 *        description="Kategória neve",
 *        nullable=false,
 *        example="iPads"
 *    ),
 *    @OA\Property(
 *        property="table_name",
 *        type="string",
 *        description="Termék neve a táblázatban",
 *        nullable=false,
 *        example="ipads"
 *    ),
 *    @OA\Property(
 *        property="description",
 *        type="string",
 *        description="Kategória leírása",
 *        nullable=true,
 *    ),
 *    @OA\Property(
 *        property="status",
 *        type="integer",
 *        description="Inaktivitás beállítása",
 *        nullable=true,
 *    ),
 *    @OA\Property(
 *        property="popular",
 *        type="integer",
 *        description="Népszerűség beállítása",
 *        nullable=true,
 *    ),
 *    @OA\Property(
 *        property="image",
 *        type="string",
 *        description="Kategóri képe",
 *        nullable=false,
 *    ),
 * )
 */
    use HasFactory;

    protected $visible = [
        'id',
        'name',
        'table_name',
        'description',
        'status',
        'popular',
        'image'
    ];

    protected $fillable = [
        'name',
        'table_name',
        'description',
        'status',
        'popular',
        'image'
    ];
}
