<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{asset("images/icon2.svg")}}">
    <title>Unnity</title>
    @vite(["resources/css/index.css"])
    @yield('head')
</head>
<bodyn>
    <header>
        <div>
            <a href="{{route("index")}}" id="logo"><img src="{{asset("images/1.svg")}}" alt=""></a>
        </div>
        <nav>
            <a href="{{route("index")}}">
                <i class="fa-solid fa-house"></i>
                <p>Home</p>
            </a>
            <a href="">
                <i class="fa-solid fa-clock"></i>
                <p>Recent</p>
            </a>
            <a href="{{route("popular")}}">
                <i class="fa-solid fa-fire"></i>
                <p>Popular</p>
            </a>
            <a href="">
                <i class="fa-solid fa-compass"></i>
                <p>Explore</p>
            </a>
            <form id="search_input">
                <input type="text" name="search" placeholder="Search something...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </nav>
        <div>
            @if (Auth::check())
            <div id="profile">
                <div id="img" style="background-image: url({{asset("storage/".Auth::user()->photo)}})"></div>
                <div id="profile_info">
                    <p>{{Auth::user()->name}}</p>
                    <p>{{["Viewer", "Blog Owner", "Administrator"][Auth::user()->role]}}</p>
                </div>
                <div id="profile_button"><i class="fa-solid fa-chevron-down"></i></div>
            </div>
            @else
            <a href="{{route("login")}}" id="login_button">Sign in</a>
            <a href="{{route("logon")}}" id="logon_button">Create new account</a>
            @endif
        </div>
    </header>
    <menu id="profile_dropdown">
        <a href="" class="profile_option">
            <i class="fa-solid fa-user"></i>
            <p>Your profile</p>
        </a>
        <div class="profile_option">
            <i class="fa-solid fa-moon"></i>
            <p>Dark Mode</p>
        </div>
        <a href="{{route("logout")}}" class="profile_option">
            <i class="fa-solid fa-right-from-bracket"></i>
            <p>Logout</p>
        </a>
    </menu>
    @yield('content')
    <footer></footer>
    @yield('js')
    @if (Auth::check())
    @vite(["resources/js/profile.js"])
    @endif
</body>
</html>