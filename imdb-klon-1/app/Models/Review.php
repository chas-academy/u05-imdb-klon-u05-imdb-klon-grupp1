<?php
#Modified Review.php and removed the id from the fillable. not needed
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'comment',
        'user_id',
        'title_id'
    ]; // rearanged

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'title_id'); // Changed from movies_id
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Removed 'user_id' as User::class represents the 'id' in the usertable.
    }
}