<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'date_to',
        'location',
        'description',
        'images',
        'links',
        'artist_id'
    ];

    protected $casts = [
        'images' => 'array',
        'links' => 'array',
        'date' => 'datetime:Y-m-d',
        'date_to' => 'datetime:Y-m-d',
    ];
}
