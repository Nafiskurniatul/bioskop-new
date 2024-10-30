<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $fillable = [
        'movie_id',
        'nama_genre',
    ];

    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
