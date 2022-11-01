<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'description',
        'images',
        'location',
        'doors',
        'additional_category',
        'additional_description',
        'additional_link'
    ];

    protected $casts = [
        'images' => 'array'
    ];

}
