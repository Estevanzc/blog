<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post_tag extends Model {
    use HasFactory;
    protected $fillable = [
        "post_id",
        "tag_id",
    ];
    public function post(): BelongsTo {
        return $this->belongsTo(Post::class);
    }
    public function tag(): BelongsTo {
        return $this->belongsTo(Tag::class);
    }
}
