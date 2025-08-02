<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model {
    use HasFactory;
    protected $fillable = [
        "title",
        "subtitle",
        "summary",
        "content",
        "banner",
        "category_id",
        "user_id",
        "blog_id",
    ];
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
    public function blog(): BelongsTo {
        return $this->belongsTo(Blog::class);
    }
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function likes(): HasMany {
        return $this->hasMany(Post_like::class);
    }
    public function tags(): HasMany {
        return $this->hasMany(Post_tag::class);
    }
    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
    public function views(): HasMany {
        return $this->hasMany(Post_view::class);
    }
    public function keys(): HasMany {
        return $this->hasMany(Key_word::class);
    }
    public function date_formated() {
        $post_data = Carbon::createFromDate($this->created_at);
        $current_data = Carbon::now();
        $data_str = "";
        if ($post_data->diffInMinutes($current_data) < 60) {
            $data_str = (int) $post_data->diffInMinutes($current_data)."min ago";
        } else if ($post_data->diffInHours($current_data) < 24) {
            $data_str = (int) $post_data->diffInHours($current_data)."h ago";
        } else if ($post_data->diffInDays($current_data) <= 7) {
            $data_str = (int) $post_data->diffInDays($current_data)." days ago";
        } else {
            $data_str = $post_data->format("d M Y");
        }
        return $data_str;
    }
    public function text_size() {
        $text = $this->content;
        $min = ceil(str_word_count(strip_tags($text)) / 250);
        $min = max(1, $min);
        return $min."min reading";
    }
    public function tiny_text() {
        return substr($this->content, 0, 75);
    }
}
