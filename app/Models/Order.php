<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [

            'last_name',
            'first_name',
            'email',
            'postal_code',
            'city',
            'address',
            'phone_number',
            'customer_code',
            'status',
            'message',
            'tracking_number'
    ];

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

}
