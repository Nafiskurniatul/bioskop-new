<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name', 'cast', 'img_url', 'sinopsis', 'director', 'age', 'duration', 'trailer_url', 'price'
    ];
}
