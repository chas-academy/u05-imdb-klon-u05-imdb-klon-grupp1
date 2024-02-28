<?php
//comment for test12345678 27e feb 17.40
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

// One movie has many genre, many reviews, many watchlist
class Movie extends Model
{
    use HasFactory;
    //TODO Add this to the ERD? //Dennis
    protected $fillable = [
        'title',
        'description',
        'release_date',
        'img_path',
        'trailer_path',
        'top_rating',
    ];

    //protected $guarded = [];
    protected $table = 'movies'; //TODO Do we need this? //Dennis

    //TODO Add comment? //Dennis
    public function moviePoster()
    {
        $imagePath = ($this->img_path) ? $this->img_path : 'xxx/xxxx.png';
        return $imagePath;
    }

    
    //TODO Add comments? //Dennis
    public function watchlistStatus()
    {
        $watchlistStatus = array();
        foreach (auth()->user()->profile->movies as $key => $movie) {
            $watchlistStatus[$key] = $movie->id . ',';
        };
        $watchlistStatus = ',' . implode($watchlistStatus);
        
        return $watchlistStatus;
    }
    
    //TODO Add comments //Dennis
    public function updateTopRating($movie)
    {
        $data_rating = $movie->reviews()->avg('rating');
        $data['top_rating'] =  $data_rating;
        $movie->update($data);
    }
    
    //TODO Is this correct? //Dennis
    // One movie can have multiple reviews
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'movie_id'); // Changed to 'movie_id' from 'title_id' 
    }
    
    /**
     * Pivot table for Movie & Genre models
     * 
     * returns relation with Genre, 'pivot_table_name', 'this_id', 'the_other_id'
     */
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'genre_movie', 'movie_id', 'genre_id')->withTimestamps(); // Changed to 'movie_id' from 'title_id' 
    }

    /**
     * Pivot table for Movie & Watchlist
     * 
     * return relation with Watchlist, 'pivot_table_name', 'this_id', 'the_other_id'
     */
    public function watchlists(): BelongsToMany
    {
        return $this->belongsToMany(Watchlist::class, 'movie_watchlist', 'movie_id', 'watchlist_id')->withTimestamps(); // Changed to 'movie_id' from 'title_id' 

    }
}
