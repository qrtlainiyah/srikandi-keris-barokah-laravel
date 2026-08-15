<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'price',
        'badge',
        'rating',
        'image',
        'icon',
        'has_detail',
        'detail_image',
        'whatsapp_url',
    ];

    protected $casts = [
        'has_detail' => 'boolean',
        'rating' => 'float',
    ];
}
