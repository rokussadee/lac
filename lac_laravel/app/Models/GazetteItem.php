<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GazetteItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'imagepath',
        'description',
        'publication_date',
        'source'
    ];

    protected $casts = [
        'publication_date' => 'datetime:Y-m-d'
    ];
}
