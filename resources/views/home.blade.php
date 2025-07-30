@extends('layouts.default_page')
@section('head')
    @vite(["resources/css/home.css"])
@endsection
@section('content')
<main>
    @if (Auth::check())
    @else
    <div id="login_screen">
        <h2>Ops! We did not find anything about you</h2>
        <img src="{{asset("images/login_icon.svg")}}" alt="">
        <p>Tell us who what you would like to read about</p>
        <a href="">
            <p>Select preferences</p>
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
    @endif
</main>
@endsection