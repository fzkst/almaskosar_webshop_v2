<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ipad extends Model
{
    use HasFactory;

    protected $visible = [
        'model',
        'color',
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
        'model',
        'color',
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
