@extends('layouts.default_page')
@section('head')
    @vite(["resources/css/popular.css"])
@endsection
@section('content')
    <main>
        <div id="page_title">
            <h2>Most popular</h2>
            <h3>See the list of the most likes posts</h3>
        </div>
        <section id="top_post">
            <a href="" id="post_background" style="background-image: url({{asset("storage/" . $top_post->banner)}})"></a>
            <div>
                <div id="post_info">
                    <div id="info_header">
                        <a href="">{{$top_post->category->name}}</a>
                        <a href="">
                            <h4>{{$top_post->title}}</h4>
                            <h5>{{$top_post->subtitle}}</h5>
                        </a href="">
                        <a href="">
                            <p>{{$top_post->date_formated()}}</p>
                            <i class="fa-solid fa-circle"></i>
                            <p>{{$top_post->text_size()}}</p>
                        </a href="">
                    </div>
                    <div id="post_actions">
                        <div class="action">
                            <i class="fa-regular fa-heart"></i>
                            <p>Like ({{$top_post->likes->count()}})</p>
                        </div>
                        <a href="" class="action">
                            <i class="fa-regular fa-comment"></i>
                            <p>Comment ({{$top_post->comments->count()}})</p>
                        </a href="">
                        <a href="" class="action">
                            <i class="fa-regular fa-paper-plane"></i>
                            <p>Share</p>
                        </a href="">
                    </div>
                </div>
                <a href="" id="blog_info">
                    <div id="blog_profile" style="background-image: url({{asset("storage/".$top_post->blog->photo)}})"></div>
                    <div id="blog_description">
                        <p>{{$top_post->blog->title}}</p>
                        <div>
                            <p>{{$top_post->blog->posts->count()}} posts</p>
                            <i class="fa-solid fa-circle"></i>
                            <p>{{$top_post->blog->activity()}}</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section id="post_options">
            <h3>Other famous posts</h3>
            <div id="popular_categories">
                <div id="bar_background"></div>
                <div class="category">All</div>
                @foreach ($categories as $category)
                    <div class="category">{{$category->name}}</div>
                @endforeach
            </div>
        </section>
        <section id="posts">
            @foreach ($posts as $post)
            <div class="post">
                <a href="" class="post_banner" style="background-image: url({{asset("storage/".$post->banner)}})">
                    <div class="post_category">{{$post->category->name}}</div>
                </a>
                <div class="post_info">
                    <div>
                        <p>{{$post->date_formated()}}</p>
                        <i class="fa-solid fa-circle"></i>
                        <p>{{$post->text_size()}}</p>
                    </div>
                    <a href="">
                        <h4 id="post_title">{{$post->title}}</h4>
                        <p>{{$post->tiny_text()}}...</p>
                    </a>
                </div>
                <a href="" class="post_owner">
                    <div class="blog_profile" style="background-image: url({{asset("storage/".$post->blog->photo)}})"></div>
                    <p>{{$post->blog->title}}</p>
                </a>
            </div>
            @endforeach
        </section>
        <button id="load_button" class="">
            <p>Load more</p>
            <img src="{{asset("images/loading_icon.svg")}}" alt="">
        </button>
        <a href="" id="scroll_end">
            <div>
                <div>
                    <i class="fa-solid fa-compass"></i>
                    <p>Explore</p>
                </div>
                <div>
                    <h2>You have reached the end !</h2>
                    <p>Explore more about what you would like to read</p>
                </div>
            </div>
        </a>
    </main>
@endsection
@section('js')
    @vite(["resources/js/popular.js"])
@endsection