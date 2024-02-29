<?php
#169
#Removed comments and added 'BelongsTo' on the 'user' method
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Watchlist extends Model
{
    use HasFactory;

    /**
     * Mass assigned values for testing
     * 'user_id' = foreign key
     */
    protected $fillable = [
        'user_id'
    ];

    /**
     * Watchlist - User Relation
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Pivot table for Watchlist & Movies
     * 
     * returns relation to Movie, 'table_name', 'this_id', 'the_other_id'
     */
    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'movie_watchlist', 'watchlist_id', 'movie_id');
    }
}
