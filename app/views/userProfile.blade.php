@extends('layouts.public', ["title" => $user->username, "sidebar" => false])

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
        border-radius: 5px;
    }
    header {
        height:250px;
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



    .title-pen {
        color: #333;
        font-family: "Coda", sans-serif;
        text-align: center;
    }
    .title-pen span {
        color: #55acee;
    }

    .user-profile {
        margin: auto;
        width: 25em;
        height: auto;
        background: #fff;
        border-radius: .3em;
    }

    .user-profile  .username {
        margin: auto;
        margin-top: -4.40em;
        margin-left: 5.80em;
        color: #658585;
        font-size: 1.53em;
        font-family: "Coda", sans-serif;
        font-weight: bold;
    }
    .user-profile  .bio {
        margin: auto;
        display: inline-block;
        margin-left: 10.43em;
        color: #e76043;
        font-size: .87em;
        font-family: "varela round", sans-serif;
    }
    .user-profile > .description {
        margin: auto;
        margin-top: 1.35em;
        margin-right: 4.43em;
        width: 14em;
        color: #c0c5c5;
        font-size: .87em;
        font-family: "varela round", sans-serif;
    }
    .user-profile > img.avatar {
        padding: .7em;
        margin-left: .3em;
        margin-top: .3em;
        height: 6.23em;
        width: 6.23em;
        border-radius: 18em;
    }

    .user-profile ul.data {
        height: 3.70em;
        background: #4eb6b6;
        text-align: center;
        border-radius: 0 0 .3em .3em;
    }
    .user-profile li {
        margin: 0 auto;
        padding: 1.30em;
        width: 33.33334%;
        display: table-cell;

        text-align: center;
    }

    .user-profile span {
        font-family: "varela round", sans-serif;
        color: #e3eeee;
        white-space: nowrap;
        font-size: 1.27em;
        font-weight: bold;
    }
    .user-profile span:hover {
        color: #daebea;
    }
    .social-btns .btn,
    .social-btns .btn:before,
    .social-btns .btn .fa {
        transition: all 0.35s;
        transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
    }
    .social-btns .btn:before {
        top: 90%;
        left: -110%;
    }
    .social-btns .btn .fab {
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
        font-size: 35px;
    }
    .social-btns .btn.facebook:before {
        background-color: #3b5998;
    }
    .social-btns .btn.facebook .fab {
        color: #3b5998;
    }
    .social-btns .btn.twitter:before {
        background-color: #3cf;
    }
    .social-btns .btn.twitter .fab {
        color: #3cf;
    }
    .social-btns .btn.google:before {
        background-color: #dc4a38;
    }
    .social-btns .btn.google .fab {
        color: #dc4a38;
    }
    .social-btns .btn.dribbble:before {
        background-color: #f26798;
    }
    .social-btns .btn.dribbble .fab {
        color: #f26798;
    }
    .social-btns .btn.skype:before {
        background-color: #00aff0;
    }
    .social-btns .btn.skype .fab {
        color: #00aff0;
    }
    .social-btns .btn:focus:before,
    .social-btns .btn:hover:before {
        top: -10%;
        left: -10%;
    }
    .social-btns .btn:focus .fab,
    .social-btns .btn:hover .fab {
        color: #fff;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    .social-btns {
        font-size: 0;
        text-align: center;
        position: relative;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }
    .social-btns .btn {
        display: inline-block;
        background-color: #fff;
        width: 40px;
        height: 40px;
        line-height: 30px;
        padding:3px;
        margin: 0px 30px;
        text-align: center;
        position: relative;
        overflow: hidden;
        border-radius: 22%;
        box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
        opacity: 0.99;
    }
    .social-btns .btn:before {
        content: '';
        width: 120%;
        height: 120%;
        position: absolute;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    .social-btns .btn .fa {
        font-size: 34px;
        vertical-align: middle;
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: 3px 10px;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
</style>
@stop

@section("content")
    <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;color:black;">
        <aside class="profile-card">
            <header style="height:250px">
                <div class="user-profile">
                    <img style="position:relative;margin:0px;" src="{{ URL::to($user->profile_img_path) }}">
                    <div class="username">Will Smith</div>
                    <div class="bio">
                        Senior UI Designer
                    </div>
                    <div class="description">
                        I use to design websites and applications
                        for the web.
                    </div>
                    <ul class="data">
                        <li>
                            <span class="entypo-heart"> 127</span>
                        </li>
                        <li>
                            <span class="entypo-eye"> 853</span>
                        </li>
                        <li>
                            <span class="entypo-user"> 311</span>
                        </li>
                    </ul>
                </div>


            </header>
            <ul class="profile-social-links">
                <div class="social-btns"><a class="btn facebook" href="#"><i  class="fab fa-facebook-f"></i></a><a  class="btn twitter" href="#"><i class="fab fa-twitter"></i></a><a   class="btn google" href="#"><i class="fab fa-google"></i></a><a class="btn dribbble" href="#"><i class="fab fa-dribble"></i></a><a class="btn skype" href="#"><i class="fab fa-youtube"></i></a>
                </div>
                @if ($user->youtube != "")
                    <li>
                        <a href="{{{ $user->youtube }}}">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                @endif

                @if ($user->facebook != "")
                    <li>
                        <a href="{{{ $user->facebook }}}">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                @endif

                @if ($user->twitter != "")
                    <li>
                        <a href="{{{ $user->twitter }}}">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                @endif

                @if ($user->tumblr != "")
                    <li>
                        <a href="{{{ $user->tumblr }}}">
                            <i class="fab fa-tumblr-square"></i>
                        </a>
                    </li>
                @endif
                @if ($user->website != "")
                    <li>
                        <a href="{{{ $user->website }}}">
                            <i class="fas fa-desktop"></i>
                        </a>
                    </li>
                @endif
            </ul>
            <br>

            <div class="profile-bio">
                <p>{{{ $user->about }}}</p>
            </div>


        </aside>
    </div>
@stop