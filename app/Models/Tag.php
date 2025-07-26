<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model {
    use HasFactory;
    protected $fillable = [
        "name",
    ];
    public function blogs(): HasMany {
        return $this->hasMany(Blog::class);
    }
    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }
}
