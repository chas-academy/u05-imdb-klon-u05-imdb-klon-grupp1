<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
// One genre has many films
class Genre extends Model
{
    use HasFactory;
    protected $table = 'genres';

    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'list_movie', 'list_id', 'title_id')->withTimestamps();
    }
    // Commented out the code below. I think the entity shouldnt be connected directly to a pivot?
    // public function movies()
    // {
    //     return $this->belongsToMany(Movie::class, 'genre_movies_pivot', 'genres_id', 'movies_id');
    // }


}
