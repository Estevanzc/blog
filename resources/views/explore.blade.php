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
                    style="background-image: url({{asset("storage/" . $famous_posts[0]->banner)}})">
                </a>
                <div class="post_desc">
                    <div class="main_desc">
                        <a href="" class="post_category">{{$famous_posts[0]->category->name}}</a>
                        <a href="">{{$famous_posts[0]->title}}</a>
                        <a href="">{{$famous_posts[0]->summary}}</a>
                    </div>
                    <a href="" class="last_desc">
                        <p>{{$famous_posts[0]->date_formated()}}</p>
                        <p>{{$famous_posts[0]->text_size()}}</p>
                    </a>
                    <a href="" class="blog_info">
                        <div class="blog_profile" style="background-image: url({{asset("storage/profiles/default_blog_profile.jpg")}})"></div>
                        <div class="blog_description">
                            <p>{{$famous_posts[0]->blog->title}}</p>
                            <div>
                                <p>{{$famous_posts[0]->blog->posts->count()}} posts</p>
                                <i class="fa-solid fa-circle"></i>
                                <p>{{$famous_posts[0]->blog->activity()}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="secondary_posts">
                @foreach ($famous_posts as $post)
                    @if ($post->id != $famous_posts[0]->id)
                        <a href="" class="post">
                            <div class="post_background" style="background-image: url({{asset("storage/" . $post->banner)}})">
                            </div>
                            <div class="post_desc">
                                <h4>{{$post->title}}</h4>
                                <p>{{$post->date_formated()}}</p>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
        </section>
        <section id="category_posts">
            <div class="category_list">
                <div class="category_cover" style="background-image: url({{asset("images/arts.jpg")}})">
                    <div>
                        <h3>Arts and Culture</h3>
                        <a href="">
                            <p>See more</p>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="post_list">
                    @foreach ($arts as $post)
                        <div class="post" style="background-image: url({{asset("storage/" . $post->banner)}})">
                            <div>
                                <a href="" class="post_category">{{$post->category->name}}</a>
                                <a href="">{{$post->title}}</a>
                                <a href="">{{$post->summary}}...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="category_list">
                <div class="category_cover" style="background-image: url({{asset("images/tech.jpg")}})">
                    <div>
                        <h3>Technology and Science</h3>
                        <a href="">
                            <p>See more</p>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="post_list">
                    @foreach ($tech as $post)
                        <div class="post" style="background-image: url({{asset("storage/" . $post->banner)}})">
                            <div>
                                <a href="" class="post_category">{{$post->category->name}}</a>
                                <a href="">{{$post->title}}</a>
                                <a href="">{{$post->summary}}...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="category_list">
                <div class="category_cover" style="background-image: url({{asset("images/food.jpg")}})">
                    <div>
                        <h3>Health care and food</h3>
                        <a href="">
                            <p>See more</p>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="post_list">
                    @foreach ($health as $post)
                        <div class="post" style="background-image: url({{asset("storage/" . $post->banner)}})">
                            <div>
                                <a href="" class="post_category">{{$post->category->name}}</a>
                                <a href="">{{$post->title}}</a>
                                <a href="">{{$post->summary}}...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="category_list">
                <div class="category_cover" style="background-image: url({{asset("images/nature.jpg")}})">
                    <div>
                        <h3>Nature</h3>
                        <a href="">
                            <p>See more</p>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="post_list">
                    @foreach ($nature as $post)
                        <div class="post" style="background-image: url({{asset("storage/" . $post->banner)}})">
                            <div>
                                <a href="" class="post_category">{{$post->category->name}}</a>
                                <a href="">{{$post->title}}</a>
                                <a href="">{{$post->summary}}...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="category_list">
                <div class="category_cover" style="background-image: url({{asset("images/politic.jpg")}})">
                    <div>
                        <h3>Politics</h3>
                        <a href="">
                            <p>See more</p>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="post_list">
                    @foreach ($politics as $post)
                        <div class="post" style="background-image: url({{asset("storage/" . $post->banner)}})">
                            <div>
                                <a href="" class="post_category">{{$post->category->name}}</a>
                                <a href="">{{$post->title}}</a>
                                <a href="">{{$post->summary}}...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="category_list">
                <div class="category_cover" style="background-image: url({{asset("images/news.jpg")}})">
                    <div>
                        <h3>News Around the World</h3>
                        <a href="">
                            <p>See more</p>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="post_list">
                    @foreach ($news as $post)
                        <div class="post" style="background-image: url({{asset("storage/" . $post->banner)}})">
                            <div>
                                <a href="" class="post_category">{{$post->category->name}}</a>
                                <a href="">{{$post->title}}</a>
                                <a href="">{{$post->summary}}...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="all_posts">
            <h3>All the posts</h3>
            <div id="post_list">
                <div class="post">
                    <a href="" class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category">category</div>
                    </a>
                    <div class="post_info">
                        <div>
                            <p>25min ago</p>
                            <i class="fa-solid fa-circle"></i>
                            <p>5min reading</p>
                        </div>
                        <a href="">
                            <h4 id="post_title">post small title</h4>
                            <p>tiny post descriptoin just for a bit content...</p>
                        </a>
                    </div>
                    <a href="" class="post_owner">
                        <div class="blog_profile" style="background-image: url({{asset("storage/profiles/default_blog_profile.jpg")}})"></div>
                        <p>blog title</p>
                    </a>
                </div>
                <div class="post">
                    <a href="" class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category">category</div>
                    </a>
                    <div class="post_info">
                        <div>
                            <p>25min ago</p>
                            <i class="fa-solid fa-circle"></i>
                            <p>5min reading</p>
                        </div>
                        <a href="">
                            <h4 id="post_title">post small title</h4>
                            <p>tiny post descriptoin just for a bit content...</p>
                        </a>
                    </div>
                    <a href="" class="post_owner">
                        <div class="blog_profile" style="background-image: url({{asset("storage/profiles/default_blog_profile.jpg")}})"></div>
                        <p>blog title</p>
                    </a>
                </div>
                <div class="post">
                    <a href="" class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category">category</div>
                    </a>
                    <div class="post_info">
                        <div>
                            <p>25min ago</p>
                            <i class="fa-solid fa-circle"></i>
                            <p>5min reading</p>
                        </div>
                        <a href="">
                            <h4 id="post_title">post small title</h4>
                            <p>tiny post descriptoin just for a bit content...</p>
                        </a>
                    </div>
                    <a href="" class="post_owner">
                        <div class="blog_profile" style="background-image: url({{asset("storage/profiles/default_blog_profile.jpg")}})"></div>
                        <p>blog title</p>
                    </a>
                </div>
                <div class="post">
                    <a href="" class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category">category</div>
                    </a>
                    <div class="post_info">
                        <div>
                            <p>25min ago</p>
                            <i class="fa-solid fa-circle"></i>
                            <p>5min reading</p>
                        </div>
                        <a href="">
                            <h4 id="post_title">post small title</h4>
                            <p>tiny post descriptoin just for a bit content...</p>
                        </a>
                    </div>
                    <a href="" class="post_owner">
                        <div class="blog_profile" style="background-image: url({{asset("storage/profiles/default_blog_profile.jpg")}})"></div>
                        <p>blog title</p>
                    </a>
                </div>
                <div class="post">
                    <a href="" class="post_banner" style="background-image: url({{asset("storage/posts/default_post_banner.jpg")}})">
                        <div class="post_category">category</div>
                    </a>
                    <div class="post_info">
                        <div>
                            <p>25min ago</p>
                            <i class="fa-solid fa-circle"></i>
                            <p>5min reading</p>
                        </div>
                        <a href="">
                            <h4 id="post_title">post small title</h4>
                            <p>tiny post descriptoin just for a bit content...</p>
                        </a>
                    </div>
                    <a href="" class="post_owner">
                        <div class="blog_profile" style="background-image: url({{asset("storage/profiles/default_blog_profile.jpg")}})"></div>
                        <p>blog title</p>
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
@endsection