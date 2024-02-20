<?php
#20/02
#Commented out the genre-list pivot
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

// One genre has many films
class Genre extends Model
{
    use HasFactory;
    protected $table = 'genres';

    protected $fillable = [
        'name'
    ];

    // Pivot table 'movie_genre'
    public function movies(): BelongsToMany
    { // ...table_name, this_id, the_other_id
        return $this->belongsToMany(Movie::class, 'movie_genre', 'genre_id', 'movie_id')->withTimestamps(); // Changed to 'movie_id' from 'title_id' 
    }

    //TODO Watchlist can include multiple genres? //Dennis
    //TODO Is this something we need now when genre only have 'id' and 'name'? //Dennis
/*     public function lists(): HasMany
    {
        return $this->hasMany(Genre::class);
    }
 */
}
