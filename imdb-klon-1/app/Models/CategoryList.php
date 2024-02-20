<?php
#20/02
#Changed relation between movie and list to HasMany from BelongsToMany in 'CategoryList'
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryList extends Model
{
    use HasFactory;

    protected $table = 'lists';

    protected $fillable = [
        'user_id',
        'movie_id', // Changed to 'movie_id' from 'title_id' 
        'watchlist' // Added
    ];

    /**
     * Get the user that owns the category list.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The movies that belong to the list.
     */
    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class, 'list_movie', 'list_id', 'movie_id')->withTimestamps(); // Changed to 'movie_id' from 'title_id' 
    }
}
