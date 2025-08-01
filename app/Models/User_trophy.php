<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_trophy extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "trophy_id",
    ];
}
