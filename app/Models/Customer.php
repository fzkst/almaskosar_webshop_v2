<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $visible = [
        'user_id',
        'person',
        'company',
        'last_name',
        'first_name',
        'postal_code',
        'city',
        'address',
        'phone_number',
        'tax_number'
    ];

    protected $fillable = [
        'user_id',
        'person',
        'company',
        'last_name',
        'first_name',
        'postal_code',
        'city',
        'address',
        'phone_number',
        'tax_number'
    ];
}
