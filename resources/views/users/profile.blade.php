@extends('layouts.default_page')
@section('head')
    @vite(["resources/css/profile.css"])
@endsection
@section('content')
    <main>
        <section id="profile_header">
            <div id="banner" style="background-image: url({{asset("storage/".$user->banner)}})">
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <p>Beginner Writer</p>
                </div>
            </div>
            <div id="profile_basic_info">
                <div id="top_profile">
                    <div id="left_profile">
                        <div id="user_profile" style="background-image: url({{asset("storage/".$user->photo)}})"></div>
                        <div id="profile_reference">
                            <p id="user_name">Estevan</p>
                            <p id="user_email">estevan.zimermann@gmail.com</p>
                            <p id="user_role">Escritor</p>
                            <p id="user_since">Since 29 Jul 2025</p>
                        </div>
                    </div>
                    <div id="right_profile">
                        <button id="gear_button">
                            <i class="fa-solid fa-gear"></i>
                        </button>
                    </div>
                </div>
                <div id="bottom_profile">
                    <div id="profile_bar">
                        <div class="selected">
                            <i class="fa-solid fa-user"></i>
                            <p>General Info</p>
                        </div>
                        <div>
                            <i class="fa-solid fa-pen-to-square"></i>
                            <p>Blogs Related</p>
                        </div>
                    </div>
                    <div class="bar_item" id="user_description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minus quod, praesentium tempore, blanditiis, veniam neque qui id illum itaque eum alias iusto illo. Molestias quod culpa debitis quam consequatur?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate suscipit repudiandae quod? Fuga beatae reprehenderit eum enim, cum veniam accusamus porro laborum explicabo fugiat alias voluptate. Eos sapiente fugit illo! Lorem</p>
                    </div>
                    <div class="bar_item" id="user_blogs">
                        <div class="blog">
                            <div class="blog_background"></div>
                            <div class="blog_description"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('js')
    @vite(["resources/js/description.js"])
@endsection
