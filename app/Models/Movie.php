<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// INHERITANCE: Class Movie mewarisi (extends) dari class Model
// Model adalah parent class dari Eloquent yang menyediakan fungsi-fungsi dasar database
class Movie extends Model
{
   
    use HasFactory;
    protected $fillable = [
       'name', 'cast', 'img_url', 'sinopsis', 'director', 'age', 'duration', 'trailer_url', 'price'
    ];

    public function genre() {
        return $this->hasMany(Genre::class);
    }
}
