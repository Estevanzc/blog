<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post_view extends Model {
    protected $fillable = [
        "user_id",
        "post_id",
    ];
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function post(): BelongsTo {
        return $this->belongsTo(post::class);
    }
}
