<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @OA\Schema(
     *    schema="ProductsSchema",
     *    @OA\Property(
     *        property="id",
     *        type="integer",
     *        description="Termék azonosítója",
     *        nullable=false,
     *        example="1"
     *    ),
     *    @OA\Property(
     *        property="Category ID",
     *        type="integer",
     *        description="A termék kategóriájának azonosítója",
     *        nullable=false,
     *        example="1"
     *    ),
     *    @OA\Property(
     *        property="model",
     *        type="string",
     *        description="Termék típusa",
     *        nullable=false,
     *        example="iPhone 14 Pro Max"
     *    ),
     *    @OA\Property(
     *        property="color",
     *        type="string",
     *        description="Termék színe",
     *        nullable=false,
     *        example="mélylila"
     *    ),
     *    @OA\Property(
     *        property="cpu",
     *        type="string",
     *        description="Termék processzorának típusa",
     *        nullable=true,
     *        example="M1"
     *    ),
     *    @OA\Property(
     *        property="memory",
     *        type="integer",
     *        description="Termék memóriájának kapacitása",
     *        nullable=true,
     *        example="128"
     *    ),
     *    @OA\Property(
     *        property="storage",
     *        type="integer",
     *        description="Termék háttértárának kapacitása",
     *        nullable=true,
     *        example="512"
     *    ),
     *    @OA\Property(
     *        property="cellular",
     *        type="integer",
     *        description="Termék kapcsolódási képessége",
     *        nullable=true,
     *        example="null"
     *    ),
     *    @OA\Property(
     *        property="description",
     *        type="string",
     *        description="Termék leírása",
     *        nullable=true*
     *    ),
     *    @OA\Property(
     *        property="popular",
     *        type="integer",
     *        description="Népszerűség beállítása",
     *        nullable=false,
     *        example="1"
     *    ),
     *    @OA\Property(
     *        property="status",
     *        type="integer",
     *        description="Inaktivítás beállítása",
     *        nullable=false,
     *        example="0"
     *    ),
     *    @OA\Property(
     *        property="price",
     *        type="integer",
     *        description="Termék eladási ára",
     *        nullable=false,
     *        example="0"
     *    ),
     *    @OA\Property(
     *        property="stock",
     *        type="integer",
     *        description="Termék raktárkészlete",
     *        nullable=false,
     *        example="5"
     *    ),
     *    @OA\Property(
     *        property="image",
     *        type="string",
     *        description="Termék képe",
     *        nullable=false,
     *        example="iPhone14proMaxMelylila.jpg"
     *    ),
     * )
     */

    use HasFactory;

    protected $visible = [
        'id',
        'category_id',
        'model',
        'color',
        'cpu',
        'memory',
        'storage',
        'cellular',
        'description',
        'popular',
        'status',
        'price',
        'stock',
        'image'
    ];

    protected $fillable = [
        'category_id',
        'model',
        'color',
        'cpu',
        'memory',
        'storage',
        'cellular',
        'description',
        'popular',
        'status',
        'price',
        'stock',
        'image'
    ];
}
