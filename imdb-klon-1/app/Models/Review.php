<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Review has one film
// Review has one user
class Review extends Model
{
    use HasFactory;

   protected $fillable = [
        'review',
        'rating',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movies_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}