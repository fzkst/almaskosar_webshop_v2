<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * @OA\Schema(
     *    schema="CartsSchema",
     *    @OA\Property(
     *        property="id",
     *        type="integer",
     *        description="Kosár azonosítója",
     *        nullable=false,
     *        example="1"
     *    ),
     *    @OA\Property(
     *        property="user_id",
     *        type="integer",
     *        description="Felhasználó azonosítója",
     *        nullable=false,
     *        example="5"
     *    ),
     *    @OA\Property(
     *        property="category_id",
     *        type="string",
     *        description="Termék kategóriájának azonosítója",
     *        nullable=false,
     *        example="2"
     *    ),
     *    @OA\Property(
     *        property="product_id",
     *        type="string",
     *        description="Termék azonosítója",
     *        nullable=false,
     *        example="14"
     *    ),
     *    @OA\Property(
     *        property="product_quantity",
     *        type="string",
     *        description="Termék mennyisége",
     *        nullable=false,
     *        example="2"
     *    ),
     * )
     */

    use HasFactory;

    protected $table = 'carts';

    protected $visible = [
        'id',
        'user_id',
        'category_id',
        'product_id',
        'product_quantity'
    ];

    protected $fillable = [
        'user_id',
        'category_id',
        'product_id',
        'product_quantity'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
