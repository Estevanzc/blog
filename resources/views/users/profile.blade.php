@extends('layouts.default_page')
@section('head')
    @vite(["resources/css/profile.css"])
@endsection
@section('content')
    <main>
        <section id="profile_header">
            <div id="profile" style="background-image: url({{asset($user->photo)}})"></div>
            <div id="profile_basic_info">
                <div></div>
            </div>
        </section>
    </main>
@endsection
@section('js')
@endsection