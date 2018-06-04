@extends('layouts.public', ["title" => "Discover", "sidebar" => false])

@section("content")
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @else
            <div class="container-fluid">
            @endif
            <div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">
                @include("includes.discover-top")
                <div class="card-columns">
                    @foreach(Posts::all() as $post)
                        <div class="col-md">
                            <div class="card">
                                @if ($post->media_type == "image")
                                    <img class="card-img-top" src="{{ URL::to("") }}" alt="Card image cap">
                                @elseif($post->media_type == "videos")
                                    <video class="card-img-top" src="" controls alt="Card image cap"></video>
                                @elseif ($post->media_type == "text")
                                @endif
                                <div class="card-body" style="color: black">
                                    <h4 class="card-title">{{{ User::where("id", "=", $post->author_id)->first()->pluck("username") }}} | {{{ $post->post_date }}}</h4>
                                    <p class="card-text">{{{ $post->text }}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

    @if (Auth::check())
        </div>
    @else

        </div>
    @endif
@stop