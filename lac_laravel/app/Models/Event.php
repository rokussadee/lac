<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'date',
        'date_to',
        'slug',
        'description',
        'images',
        'location',
        'doors',
        'tickets',
        'isActive',
        'additional_category',
        'additional_description',
    ];

    protected $casts = [
        'images' => 'array',
        'date' => 'datetime:Y-m-d',
        'date_to' => 'datetime:Y-m-d'
    ];

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }


}
