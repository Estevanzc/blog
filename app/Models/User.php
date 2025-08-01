<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "name",
        "email",
        "password",
        "birth",
        "sex",
        "dark_mode",
        "description",
        "banner",
        "photo",
        "role",
        "ocupation_id",
    ];
    public function ocupation(): BelongsTo {
        return $this->belongsTo(Ocupation::class);
    }
    public function blogs(): HasMany {
        return $this->hasMany(Blog::class);
    }
    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
    public function likes(): HasMany {
        return $this->hasMany(Post_like::class);
    }
    public function views(): HasMany {
        return $this->hasMany(Post_view::class);
    }
    public function preferences(): HasMany {
        return $this->hasMany(Preference::class);
    }
    public function members(): HasMany {
        return $this->hasMany(Member::class);
    }
    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }
    public function trophy(): HasMany {
        return $this->hasMany(User_trophy::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
