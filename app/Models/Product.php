<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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

