<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User_trophy extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "trophy_id",
    ];
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function trophy(): BelongsTo {
        return $this->belongsTo(Trophy::class);
    }
}
