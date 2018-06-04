@extends('layouts.public', ["title" => "Public Channels", "sidebar" => false])

@section("content")

    <style>

    </style>
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @endif
            <div class="col-12" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
                @yield("content")
        <div class="jumbotron jumbotron-fluid" style="height:20%;">
            <div class="container" style="height:40%;color:black;">
                <h1 class="display-3">Discover</h1>
                <p class="lead">Discover more content from people around the world!</p>
            </div>
        </div></br>
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
        </div></br>
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
        </div></br>
        <div class="card-columns">


            @foreach(Channels::all() as $channels)
                <a href="{{ URL::route("channelsview", $channels->unique_channelname) }}"><div class="card">
                    <img class="card-img-top" src="{{ $channels->unique_channelname }}" alt="Card image cap">
                    <div class="card-body">

                        <center><p style="font-size:20px;font-weight:bold;color:black" class="card-text">{{ $channels->unique_channelname }}</p></center>
                    </div>
                    </div></a>
            @endforeach





        </div>

    </div>
@stop