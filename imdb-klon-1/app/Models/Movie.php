<?php
#20/02
#Added comments for documentation and better readability.
#Added relation variables where they were missing.
#Changed Movie prime key to 'movie_id' to follow convention and minimize confusion.
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

    protected $fillable = [
        'title',
        'description',
        'release_date',
        'img_path',
        'trailer_path',
        'top_rating',
        'movie_genres',
        'genre_id', 
        'review_id' 
    ];

    //protected $guarded = [];
    protected $table = 'movies';

    public function moviePoster()
    {
        $imagePath = ($this->img_path) ? $this->img_path : 'xxx/xxxx.png';
        return $imagePath;
    }

    // One movie can have multiple reviews
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'movie_id'); // Changed to 'movie_id' from 'title_id' 
    }

    // public function profiles()
    // {
    //     return $this->belongsToMany(Profile::class, 'watchlist_pivot', 'movies_id', 'profile_name');
    // }

    public function watchlistStatus()
    {

        $watchlistStatus = array();
        foreach (auth()->user()->profile->movies as $key => $movie) {
            $watchlistStatus[$key] = $movie->id . ',';
        };
        $watchlistStatus = ',' . implode($watchlistStatus);

        return $watchlistStatus;
    }

    public function updateTopRating($movie)
    {

        $data_rating = $movie->reviews()->avg('rating');
        $data['top_rating'] =  $data_rating;
        $movie->update($data);
    }

    // pivot table for Movie and Genre
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id')->withTimestamps(); // Changed to 'movie_id' from 'title_id' 
    }

    // pivot table for Movie & CategoryList
    public function categoryLists(): BelongsToMany
    {
        return $this->belongsToMany(CategoryList::class, 'list_movie', 'movie_id', 'list_id')->withTimestamps(); // Changed to 'movie_id' from 'title_id' 

    }
}