<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $visible = [
        'name',
        'desc',
        'status',
        'popular',
        'image'
    ];

    protected $fillable = [
        'name',
        'desc',
        'status',
        'popular',
        'image'
    ];
}
