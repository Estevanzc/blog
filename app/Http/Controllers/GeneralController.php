<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Post_tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GeneralController extends Controller {
    public function index() {
        return view("home");
    }
    public function popular() {
        return view("popular", [
            "selected" => 2,
            "top_post" => Post::withCount("likes")->orderBy("likes_count", "desc")->first(),
            "categories" => Category::withCount("posts")->orderBy("posts_count", "desc")->limit(5)->get(),
            "tags" => Post_tag::select('tags.name', DB::raw('COUNT(*) as usage_count'))
                ->join('tags', 'tags.id', '=', 'post_tags.tag_id')
                ->groupBy('tags.name')
                ->orderByDesc('usage_count')
                ->take(5)
                ->get(),
            "posts" => Post::withCount("likes")->orderBy("likes_count", "desc")->limit(20)->get(),
        ]);
    }
    public function explore() {
        $categories = Category::withCount("posts")->orderBy("posts_count", "desc")->limit(6)->get()->toArray();
        $famous_posts = [];
        foreach ($categories as $category) {
            $famous_posts[] = Post::withCount("likes")->orderBy("likes_count", "desc")->where("category_id", $category["id"])->first();
        }
        return view("explore", [
            "famous_posts" => $famous_posts,
            "arts" => Post::with('category')
                ->whereHas('category', function ($query) {
                    $query->whereIn('name', ['Arts', 'Culture']);
                })->get(),
            "tech" => Post::with('category')
                ->whereHas('category', function ($query) {
                    $query->whereIn('name', ['Tech', 'Science']);
                })->get(),
            "health" => Post::with('category')
                ->whereHas('category', function ($query) {
                    $query->whereIn('name', ['Health', 'Food']);
                })->get(),
            "nature" => Post::with('category')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'Nature');
                })->get(),
            "politics" => Post::with('category')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'Politics');
                })->get(),
            "news" => Post::with('category')
                ->whereHas('category', function ($query) {
                    $query->where('name', 'News');
                })->get(),
        ]);
    }
}
