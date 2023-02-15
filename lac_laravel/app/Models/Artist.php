<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description'
    ];

    protected $casts = [
        'images' => 'array'
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function residences()
    {
        return $this->belongsToMany(Residence::class);
    }

    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }
}
