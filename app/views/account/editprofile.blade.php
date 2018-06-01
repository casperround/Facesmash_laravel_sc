@extends('layouts.public', ["title" => "Edit your Profile", "sidebar" => false])

@section("onpagecss")
    <style class="cp-pen-styles">
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
        .profile-card {
            font-family: 'Open Sans', sans-serif;
            font-size: 100%;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            width: 90%;
            height: auto;
            margin: 0 auto;
            background: #fff;
            border-radius: 5px;
            border: 1px solid;
            border-color: #e5e6e9 #dfe0e4 #d0d1d5;
        }

        .purp-button {
            background-color: #5d3bae;
            color: white;
        }

        .purp-button:hover {
            background-color: #423385;
            color: white;

        }

        .profile-card::before {
            content: '';
            height: 3px;
            width: 500px;
            margin-top: -3px;
            position: absolute;
        }

        header h1,
        header h2 {
            font-weight: 300;
            color: #fff;
            margin: 40px 0 0 200px;
            padding: 10px 10px 0 10px;
            text-align: right;
            font-size: 1.85em;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: absolute;
        }

        header h2 {
            font-size: 1em;
            margin: 85px 0 0 200px;
            text-transform: none;
        }

        header img {
            position: absolute;
            margin: 40px 20px 20px 70px;
            width: 100px;
            height: 100px;
            border-radius: 100%;
        }

        .profile-bio {
            margin: -175px 0 0 0;
            height: auto;
            width: 100%;
            padding: 0;
            visibility: hidden;
            z-index: 0;
            transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
        }

        .profile-card > .profile-bio {
            margin: 0;
            visibility: visible;
        }

        .profile-card > .profile-social-links {
            margin: 0;
        }

        .profile-bio p {
            font-weight: 300;
            color: #888;
            width: 480px;
            padding: 0 10px 0 10px;
            position: relative;
            line-height: 1.5em;
            font-size: 1em;
        }

        .profile-social-links {
            text-align: center;
            margin: -50px 0 0 0;
            padding: 5px 0 5px 0;
            background: #fff;
            border-top: 1px solid #e5e5e5;

            transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
        }

        .profile-social-links li {
            list-style: none;
            display: inline-block;
            margin: 5px 10px 5px 10px;
            width: 25px;
            height: 25px;
            filter: contrast(0);
            -webkit-filter: contrast(0);
            transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
            text-align: center;
        }

        li img {
            width: 25px;
            height: 25px;
        }

        li:hover {
            filter: contrast(1);
            -webkit-filter: contrast(1);
            transition: all 0.5s ease-in-out;
            -webkit-transform: scale(1.15);
            -moz-transform: scale(1.15);
            -ms-transform: scale(1.15);
            -o-transform: scale(1.15);
            transform: scale(1.15);
        }

        li:nth-child(1):hover {
            border-color: #50abf1;
        }

        li:nth-child(2):hover {
            border-color: #82b541;
        }

        li:nth-child(3):hover {
            border-color: #000;
        }

        header {
            background: url('{{ URL::to("assets/img/cover.jpg") }}');
            -moz-background-size:100% 100%;
            -webkit-background-size:100% 100%;
            background-size:100% 100%;
            height: 175px;
            background-size: cover;
            display: block;
            color:black;
            position: relative;
            z-index: 1;
            width: 100%;
        }

        i {
            font-size: 25px;
        }
    </style>
@stop

@section("content")
    <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;color:black;">
        <aside class="profile-card">
            <header>
                <a href="#">
                    <img src="{{ URL::to(Auth::user()->profile_img_path) }}">
                </a>

                <h1>{{{ Auth::user()->first_name }}} {{{ Auth::user()->last_name }}}</h1>
                <h2>{{{ Auth::user()->username }}}</h2>
            </header>

            <br>
        </aside>
        <form action="{{{ URL::route('account.myProfile.doEdit') }}}" method="post">
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="username" value="{{{ Auth::user()->username }}}">
            </div>
            <button type="submit" class="btn purp-button">Update Profile</button>
            {{ Form::token() }}
        </form>
    </div>

@stop