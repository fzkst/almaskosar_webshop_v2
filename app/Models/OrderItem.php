<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    /**
     * @OA\Schema(
     *    schema="OrderItemsSchema",
     *    @OA\Property(
     *        property="id",
     *        type="integer",
     *        description="Rendelés termék azonosítója",
     *        nullable=false,
     *        example="1"
     *    ),
     *    @OA\Property(
     *        property="order_id",
     *        type="string",
     *        description="Rendelés azonosítója",
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
     *        example="3"
     *    ),
     *    @OA\Property(
     *        property="price",
     *        type="string",
     *        description="Termék ára",
     *        nullable=false,
     *    ),
     * )
     */
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'product_quantity'
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
