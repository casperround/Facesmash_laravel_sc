<!DOCTYPE html>
<html>
<head>
    <title>{{{ (empty($title) ? "" : $title . " - ") }}}FaceSmash</title>

    <link rel="stylesheet" href="{{ URL::to("assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ URL::to("assets/css/style.css") }}">

    @include("includes.sitewidemeta")
</head>

<body>
<div class="Navbar">
    <nav class="navbar navbar-expand-lg" style="height:60px">
        <a class="navbar-brand" href="#">
            <img src="{{ URL::to("assets/img/logo_small.png") }}" width="30" height="30" class="d-inline-block align-top" alt="">
            Facesmash
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ URL::route("home") }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route("discover") }}" >Discover</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route("userProfile", [Auth::user()->username]) }}">My Profile</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route("auth.logout") }}">Logout</a>
                </li>
            </ul>
            <form class="form-inline" action="search.php" method="GET">
                <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>

@yield("onpagecss")

<style>
    .Profile_Header {
        height:100px;
        width:100%;
        background: url({{ URL::to("assets/img/cover.jpg") }}) no-repeat center;

        background-size: cover;
    }
    .Tabets {
        height:40px;
        width:100%;
        transition: background 0.2s;
    }
    .Tabets:hover {
        background: #656D78;
        transition: background 0.2s;
    }
    .P_Head {
        height:50%;
        padding:10px;
        position: relative;

    }
    .Profile_Img {
        border-radius: 50px;
        height:50px;
        width:50px;
        margin-left: auto;
        margin-right:auto;
    }
</style>

<div class="row">
    @if (Auth::check())
        @include("includes.left-profile")
    @endif

    @yield("content")

</div>

@if (Auth::check())
<div class="col-2 Back" style="margin-top:60px;padding-top:10px;overflow-y:scroll;height:100vh;padding:0px;box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);">
        @include("includes.chat-container")
</div>
@endif

@yield("content")

<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>