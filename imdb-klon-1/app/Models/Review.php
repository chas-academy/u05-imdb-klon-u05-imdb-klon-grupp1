<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;




class Review extends Model
{
    use HasFactory;


    protected $fillable = [
        'rating',
        'comment',
        'user_id',
        'movie_id'
    ];


    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
