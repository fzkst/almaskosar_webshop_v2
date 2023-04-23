<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    /**
     * @OA\Schema(
     *    schema="OrdersSchema",
     *    @OA\Property(
     *        property="id",
     *        type="integer",
     *        description="Rendelés azonosítója",
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
     *        property="last_name",
     *        type="string",
     *        description="Felhasználó vezetékneve",
     *        nullable=true,
     *        example="Gipszes"
     *    ),
     *    @OA\Property(
     *        property="first_name",
     *        type="string",
     *        description="Felhasználó keresztneve",
     *        nullable=true,
     *        example="Jakab"
     *    ),
     *    @OA\Property(
     *        property="email",
     *        type="string",
     *        description="Felhasználó email címe",
     *        nullable=false,
     *        format="email",
     *        example="gipszes.jakab@gmail.com"
     *    ),
     *    @OA\Property(
     *        property="postal_code",
     *        type="integer",
     *        description="Felhasználó irányítószáma",
     *        nullable=false,
     *        example="1454"
     *    ),
     *    @OA\Property(
     *        property="city",
     *        type="string",
     *        description="Felhasználó városa",
     *        nullable=false,
     *        example="Budapest"
     *    ),
     *    @OA\Property(
     *        property="address",
     *        type="string",
     *        description="Felhasználó címe",
     *        nullable=false,
     *        example="Lilaakác u. 15."
     *    ),
     *    @OA\Property(
     *        property="phone_number",
     *        type="string",
     *        description="Felhasználó telefonszáma",
     *        nullable=false,
     *        example="+36302124787"
     *    ),
     *    @OA\Property(
     *        property="customer_code",
     *        type="string",
     *        description="Felhasználó vevőkódja",
     *        nullable=false,
     *        example="84222"
     *    ),
     *    @OA\Property(
     *        property="total_price",
     *        type="string",
     *        description="Vásárlás végösszege",
     *        nullable=false,
     *        example="929999"
     *    ),
     *    @OA\Property(
     *        property="status",
     *        type="string",
     *        description="Vásárlás státusza",
     *        nullable=false,
     *        example="0"
     *    ),
     *    @OA\Property(
     *        property="message",
     *        type="string",
     *        description="Rendeléssel kapcsolatos információk a felhasználónak",
     *        nullable=true,
     *        example="Rendelés kiszállítás alatt"
     *    ),
     *    @OA\Property(
     *        property="tracking_number",
     *        type="string",
     *        description="Rendelés száma",
     *        nullable=false,
     *        example="Almáskosár/1339"
     *    ),
     * )
     */
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [

        'user_id',
        'last_name',
        'first_name',
        'email',
        'postal_code',
        'city',
        'address',
        'phone_number',
        'customer_code',
        'total_price',
        'status',
        'message',
        'tracking_number'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
