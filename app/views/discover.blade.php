@extends('layouts.public', ["title" => "Discover", "sidebar" => false])

@section("content")
    <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
        <div class="jumbotron jumbotron-fluid" style="height:20%;">
            <div class="container" style="height:40%;color:black;">
                <h1 class="display-3">Discover</h1>
                <p class="lead">Discover more content from people around the world!</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-4">
                <a href="{{ URL::route("discover.photo") }}"><button class="btn btn-outline-info" style="width:100%;">Pictures</button></a>
            </div>
            <div class="col-4">
                <a href="{{ URL::route("discover.video") }}"><button class="btn btn-outline-info" style="width:100%;">Videos</button></a>
            </div>
            <div class="col-4">
                <a href="{{ URL::route("discover.gif") }}"><button class="btn btn-outline-info" style="width:100%;">Gif's</button></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-4">
                <a href="{{ URL::route("discover.page") }}"><button class="btn btn-outline-info" style="width:100%;">Pages</button></a>
            </div>
            <div class="col-4">
                <a href="{{ URL::route("discover.group") }}"><button class="btn btn-outline-info" style="width:100%;">Groups</button></a>
            </div>
            <div class="col-4">
                <a href="{{ URL::route("discover.channel") }}"><button class="btn btn-outline-info" style="width:100%;">Channels</button></a>
            </div>
        </div>
        <br>

        <div class="card-columns">

            @foreach(Posts::all() as $post)
                <div class="card">
                    @if ($post->media_type == "image")
                        <img class="card-img-top" src="{{ URL::to("") }}" alt="Card image cap">
                    @elseif($post->media_type == "video")
                        <video class="card-img-top" src="" controls alt="Card image cap"></video>
                    @elseif ($post->media_type == "text")
                    @endif
                    <div class="card-body" style="color: black">
                        <h4 class="card-title">{{{ User::where("id", "=", $post->author_id)->first()->pluck("username") }}} | {{{ $post->post_date }}}</h4>
                        <p class="card-text">{{{ $post->text }}}</p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@stop