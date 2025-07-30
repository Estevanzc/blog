@extends('layouts.default_page')
@section('head')
    @vite(["resources/css/explore.css"])
@endsection
@section('content')
    <main>
        <div id="page_title">
            <h2>Explore new themes</h2>
            <h3>It is not too late do learn something new</h3>
        </div>
        <section id="famous_posts">
            <div id="main_post" class="post">
                <a href="" class="post_background"
                    style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                </a>
                <div class="post_desc">
                    <div class="main_desc">
                        <a href="" class="post_category">Category</a>
                        <a href="">Post title texto</a>
                        <a href="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus hic, amet, in sit,
                            quod cupiditate eaque incidunt nemo enim placeat sunt</a>
                    </div>
                    <a href="" class="last_desc">
                        <p>15h ago</p>
                        <p>5min reading</p>
                    </a>
                    <a href="" class="blog_info">
                        <div class="blog_profile"
                            style="background-image: url({{asset("storage/profiles/default_blog_profile.jpg")}})"></div>
                        <div class="blog_description">
                            <p>blog name example</p>
                            <div>
                                <p>225 posts</p>
                                <i class="fa-solid fa-circle"></i>
                                <p>Daily activity</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="secondary_posts">
                <a href="" class="post">
                    <div class="post_background"
                        style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category"></div>
                    </div>
                    <div class="post_desc">
                        <h4>Post title texto just for a bit of test</h4>
                        <p>45min ago</p>
                    </div>
                </a>
                <a href="" class="post">
                    <div class="post_background"
                        style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category"></div>
                    </div>
                    <div class="post_desc">
                        <h4>Post title texto just for a bit of test</h4>
                        <p>45min ago</p>
                    </div>
                </a>
                <a href="" class="post">
                    <div class="post_background"
                        style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category"></div>
                    </div>
                    <div class="post_desc">
                        <h4>Post title texto just for a bit of test</h4>
                        <p>45min ago</p>
                    </div>
                </a>
                <a href="" class="post">
                    <div class="post_background"
                        style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category"></div>
                    </div>
                    <div class="post_desc">
                        <h4>Post title texto just for a bit of test</h4>
                        <p>45min ago</p>
                    </div>
                </a>
                <a href="" class="post">
                    <div class="post_background"
                        style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category"></div>
                    </div>
                    <div class="post_desc">
                        <h4>Post title texto just for a bit of test</h4>
                        <p>45min ago</p>
                    </div>
                </a>
            </div>
        </section>
        <section id="category_posts">
            <div class="category_list">
                <div class="category_cover">
                    <h3>Arts and Culture</h3>
                    <a href="">
                        <p>See more</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <div class="post_list">
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
            </div>
        </section>
        <section id="all_posts">
            <h3>All the posts</h3>
            <div id="post_list">
                <div class="post">
                    <a href="" class="" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category">Category</div>
                    </a>
                    <div class="post_info">
                        <div>
                            <p>5min ago</p>
                            <i class="fa-solid fa-circle"></i>
                            <p>10min reading</p>
                        </div>
                        <a href="">
                            <h4 id="post_title">post title</h4>
                            <p>just a tiny text for show it to the user...</p>
                        </a>
                    </div>
                    <a href="" class="post_owner">
                        <div class="blog_profile" style="background-image: url()"></div>
                        <p>blog_name</p>
                    </a>
                </div>
            </div>
        </section>
        <button id="load_button" class="">
            <p>Load more</p>
            <img src="{{asset("images/loading_icon.svg")}}" alt="">
        </button>
    </main>
@endsection
@section('js')
    @vite(["resources/js/popular.js"])
@endsection