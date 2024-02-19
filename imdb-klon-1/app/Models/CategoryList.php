<?php

namespace App\Models;
#CategoryList.php changes ->
#Added the 'use'-case to use factory.
#Added $fillable variable to handle mass assignments.

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use App\Models\Movie;


class CategoryList extends Model
{
    use HasFactory;

    protected $table = 'lists';

    protected $fillable = [
        'user_id',
        'title_id',
        'watchlist' // Added
    ];

    /**
     * Get the user that owns the category list.
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    /**
     * The movies that belong to the list.
     */
    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'list_movie', 'list_id', 'title_id')->withTimestamps();
    }
}
