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
                        @foreach(Pages::where("visibility", "=", "1")->get() as $pages)
                            <div class="col-md">
                                <a href="{{ URL::route("pagesview", $pages->unique_pagename) }}"><div class="card">
                                        <img class="card-img-top" src="{{ URL::to($pages->banner_img_path) }}" alt="Card image cap">
                                        <div class="card-body">
                                            <center><i style="color:#ED5565" class="far fa-file-alt"></i><p style="font-size:20px;font-weight:bold;color:black;" class="card-text">{{ $pages->unique_pagename }}</p></center>
                                        </div>
                                    </div></a>
                            </div>
                        @endforeach
                        @foreach(Posts::where("visibility", "=", "1")->orderBy('post_time', 'DESC')->orderBy('post_date', 'DESC')->get() as $post)

                            @if ($post->media_type == 'text')
                            <div class="col-md">
                                <div class="card">
                                    <div class="card-body" style="color: black">
                                        <h4 class="card-title">{{{ User::where("id", "=", $post->author_id)->pluck("username") }}} | {{{ $post->post_date }}}</h4>
                                        <i style="color:#FFCE54" class="fas fa-pencil-alt"></i>
                                        <p class="card-text">{{{ $post->text }}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if ($post->media_type == 'jpg' OR $post->media_type == 'png' OR $post->media_type == 'PNG' OR $post->media_type == 'JPG')
                                    <a href="{{ URL::route("discover.photoView", $post->post_id) }}"><div class="col-md">
                                        <div class="card">
                                            <img class="card-img-top" src="{{ URL::to($post->file_path) }}" alt="Card image cap">
                                            <div class="card-body" style="color: black">
                                                <h4 class="card-title">{{{ User::where("id", "=", $post->author_id)->pluck("username") }}} | {{{ $post->post_date }}}</h4>
                                                <center><i style="color:#48CFAD" class="far fa-image"></i></center>
                                                <p class="card-text">{{{ $post->text }}}</p>
                                            </div>
                                        </div>
                                        </div></a>
                            @endif
                        @endforeach
                </div>
            </div>

    @if (Auth::check())
        </div>
    @else

        </div>
    @endif
@stop