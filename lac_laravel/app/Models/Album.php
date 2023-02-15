<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'imagepath',
        'release_date',
        'source'
    ];

    protected $casts = [
        'release_date' => 'datetime::Y-m-d'
    ];

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }
}
