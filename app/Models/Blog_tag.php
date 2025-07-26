<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog_tag extends Model {
    use HasFactory;
    protected $fillable = [
        "blog_id",
        "tag_id",
    ];
    public function blog(): BelongsTo {
        return $this->belongsTo(Blog::class);
    }
    public function tag(): BelongsTo {
        return $this->belongsTo(Tag::class);
    }
}
