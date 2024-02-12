<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'review_id',
        'user_id',
        'title_id',
        'rating',
        'comment'
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