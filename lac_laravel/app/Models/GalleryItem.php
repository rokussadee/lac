<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'images',
        'videos',
        'description',
        'category'
    ];

    protected $casts = [
        'images' => 'array',
        'videos' => 'array'
    ];
}
