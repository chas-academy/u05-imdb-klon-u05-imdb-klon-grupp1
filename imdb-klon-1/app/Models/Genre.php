<?php
#Added $fillable for table content to create a test environment for genres.
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
    ]; // Removed fk

    // Pivot table 'movie_genre'
    public function movies(): BelongsToMany
    { // ...table_name, this_id, the_other_id
        return $this->belongsToMany(Movie::class, 'movie_genre', 'genre_id', 'title_id')->withTimestamps();
    }

    //TODO Watchlist can include multiple genres? //Dennis
    //TODO Is this something we need now when genre only have 'id' and 'name'? //Dennis
    public function lists(): HasMany
    {
        return $this->hasMany(Genre::class);
    }

}
