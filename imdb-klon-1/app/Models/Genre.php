<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// One genre has many films
class Genre extends Model
{
    use HasFactory;
    protected $table = 'genres';
    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'genre_movies_pivot', 'genres_id', 'movies_id');
    }
}






  