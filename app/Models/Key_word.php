<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Key_word extends Model {
    use HasFactory;
    protected $fillable = [
        "name",
        "post_id",
    ];
    public function post(): BelongsTo {
        return $this->belongsTo(Post::class);
    }
}
