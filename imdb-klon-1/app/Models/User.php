<?php
#Changed 'name' -> 'username' as said in the ERD. 
#Added 'role'. I must have missed it before.
#Installed 'Doctrine DBAL' package to view db content in the terminal. Use `php artisan db:table table_name` to view table-content.
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\CategoryList;
use App\Models\Review;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'email_verified_at',
        'password',
        'role',
    ]; // Added

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // One user can have multiple lists 
    public function categorieLists(): HasMany
    {
        return $this->hasMany(CategoryList::class);
    }

    // One user can have one review per movie
    public function reviews(): HasOne 
    {
        return $this->hasOne(Review::class);    
    }
}
