<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model {
    use HasFactory;
    protected $fillable = [
        "title",
        "subtitle",
        "description",
        "photo",
        "banner",
        "user_id",
        "category_id",
    ];
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function tags(): HasMany {
        return $this->hasMany(Blog_tag::class);
    }
    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }
}
