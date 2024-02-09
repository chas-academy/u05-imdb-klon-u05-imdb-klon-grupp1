<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use App\Models\Movie;


class CategoryList extends Model
{
    protected $table = 'lists';
    /**
     * Get the user that owns the category list.
     */
    public function User(): HasOne
    {
        return $this->hasOne(User::class);
    }

    /**
     * The movies that belong to the list.
     */
    public function Movie(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'MoviesLists', 'list_id', 'title_id');
    }
}
