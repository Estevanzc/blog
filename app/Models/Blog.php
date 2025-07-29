<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
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
    public function followers(): HasMany {
        return $this->hasMany(Follower::class);
    }
    public function activity() {
        $last_posts = Post::where("blog_id", $this->id)
            ->orderByDesc("created_at")
            ->limit(5)
            ->get();

        $date_gap = [];
        $days_amount = 0;
        $gap_str = "";

        for ($i = 0; $i < count($last_posts) - 1; $i++) {
            $post_date = Carbon::parse($last_posts[$i]->created_at);
            $next_post_date = Carbon::parse($last_posts[$i + 1]->created_at);

            $days_diff = $post_date->diffInDays($next_post_date);
            $date_gap[] = $days_diff;
            $days_amount += $days_diff;
        }

        if (count($date_gap) > 0) {
            $average_days = $days_amount / count($date_gap);
        }

        if ($average_days <= 3) {
            $gap_str = "Daily";
        } elseif ($average_days <= 10) {
            $gap_str = "Weekly";
        } else {
            $gap_str = "Monthly";
        }
        return $gap_str." activity";
    }
}
