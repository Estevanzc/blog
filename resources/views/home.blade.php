@extends('layouts.default_page')
@section('head')
    @vite(["resources/css/home.css"])
@endsection
@section('content')
<main>
    <section id="home_cover">
        <h1>Learn about something you like</h1>
        <h2>A place focused in promoting knowledge and interaction</h2>
        <form id="search_input" method="get" action="">
            <input type="text" name="search" placeholder="Search something...">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </section>
    <section id="home_posts">
        <div id="recommended_posts">
            <h3>Recommended for you</h3>
            <div id="filter">
                <div class="filter">All</div>
                <div class="filter">From who you follow</div>
                <div class="filter">Your categories</div>
                <div class="filter">Your Keywords</div>
                <div id="filter_background"></div>
            </div>
            <div id="post_list">
                <div class="post" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                    <div>
                        <a href="" class="post_category">Category</a>
                        <a href="">Post title</a>
                        <a href="">Post small description just ot show a bit fo the contenta sdasdasd asdasd dsa sad asdasdasd asd asd...</a>
                    </div>
                </div>
                <div class="post" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                    <div>
                        <a href="" class="post_category">Category</a>
                        <a href="">Post title</a>
                        <a href="">Post small description just ot show a bit fo the contenta sdasdasd asdasd dsa sad asdasdasd asd asd...</a>
                    </div>
                </div>
                <div class="post" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                    <div>
                        <a href="" class="post_category">Category</a>
                        <a href="">Post title</a>
                        <a href="">Post small description just ot show a bit fo the contenta sdasdasd asdasd dsa sad asdasdasd asd asd...</a>
                    </div>
                </div>
                <div class="post" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                    <div>
                        <a href="" class="post_category">Category</a>
                        <a href="">Post title</a>
                        <a href="">Post small description just ot show a bit fo the contenta sdasdasd asdasd dsa sad asdasdasd asd asd...</a>
                    </div>
                </div>
                <div class="post" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                    <div>
                        <a href="" class="post_category">Category</a>
                        <a href="">Post title</a>
                        <a href="">Post small description just ot show a bit fo the contenta sdasdasd asdasd dsa sad asdasdasd asd asd...</a>
                    </div>
                </div>
                <div class="post" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                    <div>
                        <a href="" class="post_category">Category</a>
                        <a href="">Post title</a>
                        <a href="">Post small description just ot show a bit fo the contenta sdasdasd asdasd dsa sad asdasdasd asd asd...</a>
                    </div>
                </div>
            </div>
            <button id="load_button" class="">
                <p>Load more</p>
                <img src="{{asset("images/loading_icon.svg")}}" alt="">
            </button>
        </div>
        <div id="side_posts">
            <div class="post_block">
                <h3>Explore</h3>
                <a href="" class="side_post">
                    <div class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})"></div>
                    <div class="post_desc">
                        <p>25 Jul 2025</p>
                        <h4>Small text for the post title</h4>
                    </div>
                </a>
                <a href="" class="side_post">
                    <div class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})"></div>
                    <div class="post_desc">
                        <p>25 Jul 2025</p>
                        <h4>Small text for the post title</h4>
                    </div>
                </a>
                <a href="" class="side_post">
                    <div class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})"></div>
                    <div class="post_desc">
                        <p>25 Jul 2025</p>
                        <h4>Small text for the post title</h4>
                    </div>
                </a>
                <a href="" class="side_post">
                    <div class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})"></div>
                    <div class="post_desc">
                        <p>25 Jul 2025</p>
                        <h4>Small text for the post title</h4>
                    </div>
                </a>
                <a href="">
                    <p>See more</p>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
            <div class="post_block">
                <h3>Recent</h3>
                <a href="" class="side_post">
                    <div class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})"></div>
                    <div class="post_desc">
                        <p>25 Jul 2025</p>
                        <h4>Small text for the post title</h4>
                    </div>
                </a>
                <a href="" class="side_post">
                    <div class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})"></div>
                    <div class="post_desc">
                        <p>25 Jul 2025</p>
                        <h4>Small text for the post title</h4>
                    </div>
                </a>
                <a href="" class="side_post">
                    <div class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})"></div>
                    <div class="post_desc">
                        <p>25 Jul 2025</p>
                        <h4>Small text for the post title</h4>
                    </div>
                </a>
                <a href="" class="side_post">
                    <div class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})"></div>
                    <div class="post_desc">
                        <p>25 Jul 2025</p>
                        <h4>Small text for the post title</h4>
                    </div>
                </a>
                <a href="">
                    <p>See more</p>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!--<div id="login_screen">
        <h2>Ops! We did not find anything about you</h2>
        <img src="{asset("images/login_icon.svg")}}" alt="">
        <p>Tell us who what you would like to read about</p>
        <a href="">
            <p>Select preferences</p>
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>-->
</main>
@endsection
@section('js')
    @vite(["resources/js/home.js"])
@endsection