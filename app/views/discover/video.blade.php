@extends('layouts.public', ["title" => "Videos", "sidebar" => false])

@section("content")
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
    @endif
            <div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">
                @include("includes.discover-top")
                <div class="card-columns">
                    @foreach(Posts::where("media_type", "=", "mp4")->where("visibility", "=", "1")->get() as $post)
                        <a href="{{ URL::route("discover.videoView", $post->post_id) }}"><div class="col-md">
                            <div class="card">
                                <video controls class="card-img-top" src="{{ URL::to($post->file_path) }}"></video>
                                <div class="card-body" style="color: black">
                                    <h4 class="card-title">{{{ User::where("id", "=", $post->author_id)->pluck("username") }}} | {{{ $post->post_date }}}</h4><br/>
                                    <p class="card-text">{{{ $post->text }}}</p>
                                </div>
                            </div>
                            </div></a>
                    @endforeach
                </div>
            </div>

    @if (Auth::check())
        </div>
    @endif
@stop