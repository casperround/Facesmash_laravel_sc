@extends('layouts.public', ["title" => "Home", "sidebar" => false])

@section("content")

    <style>

    </style>
    <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
        <div class="jumbotron jumbotron-fluid" style="height:20%;">
            <div class="container" style="height:40%;color:black;">
                <h1 class="display-3">Discover</h1>
                <p class="lead">Discover more content from people around the world!</p>
            </div>
        </div></br>
        <div class="row">
            <div class="col-4">
                <a href="{{ URL::route("discoverPhoto") }}"><button class="btn btn-outline-info" style="width:100%;">Pictures</button></a>
            </div>
            <div class="col-4">
                <a href="{{ URL::route("discoverVideo") }}"><button class="btn btn-outline-info" style="width:100%;">Videos</button></a>
            </div>
            <div class="col-4">
                <a href="{{ URL::route("discoverGif") }}"><button class="btn btn-outline-info" style="width:100%;">Gif's</button></a>
            </div>
        </div></br>
        <div class="row">
            <div class="col-4">
                <a href="{{ URL::route("discoverPagePage") }}"><button class="btn btn-outline-info" style="width:100%;">Pages</button></a>
            </div>
            <div class="col-4">
                <a href="{{ URL::route("discoverGroup") }}"><button class="btn btn-outline-info" style="width:100%;">Groups</button></a>
            </div>
            <div class="col-4">
                <a href="{{ URL::route("discoverChannel") }}"><button class="btn btn-outline-info" style="width:100%;">Channels</button></a>
            </div>
        </div></br>



    </div>
@stop