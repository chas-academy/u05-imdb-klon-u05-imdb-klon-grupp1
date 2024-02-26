<?php
#118
#Corrected a syntax error 'movie_genre' -> 'genre_movie'
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genres'; //TODO is this needed? //Dennis

    protected $fillable = ['name'];

    /**
     * Pivot table for Movie and Genre
     * 
     * ($param = `pivot_table_name`, `this_table_id`, `the_other_table_id`)
     */
    public function movies(): BelongsToMany
    { 
        return $this->belongsToMany(Movie::class, 'genre_movie', 'genre_id', 'movie_id')->withTimestamps();
    }
}
