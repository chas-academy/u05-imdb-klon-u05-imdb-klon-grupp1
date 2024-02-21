<?php
#21/02
#Added comments explaining the code.
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
        return $this->belongsToMany(Movie::class, 'movie_genre', 'genre_id', 'movie_id')->withTimestamps();
    }
}
