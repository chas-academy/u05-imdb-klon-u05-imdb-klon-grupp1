<?php
// User.php
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Watchlist;
use App\Models\Review;


class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'email_verified_at', //TODO Extra but included in laravel-projects, keep? //Dennis
        'password',
        'role',
    ];


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

    // One user can have one 'Watchlist'
    public function watchlist(): HasOne
    {
        return $this->hasOne(Watchlist::class);
    }

    // One user can review multiple movies
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    /**
     * Check if the user has the given role.
     *
     * @param string $role
     * @return bool
     */

    public function hasRole($role)
    {
        return $this->role === $role;
    }
}
