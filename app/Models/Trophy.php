<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trophy extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
        "level",
        "type",
    ];
    public function trophy(): HasMany {
        return $this->hasMany(User_trophy::class);
    }
}
