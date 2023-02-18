<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iphone extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'model',
        'color',
        'storage',
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
        'description',
        'popular',
        'status',
        'price',
        'stock',
        'image'
    ];
}
