@extends('layouts.public', ["title" => "Discover Photos", "sidebar" => false])

@section("content")
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
    @endif
            <div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">
                @include("includes.discover-top")
                <div class="card-columns">
                    @foreach(Posts::where("media_type", "=", "jpg", "OR", "media_type", "=", "JPG", "OR", "media_type", "=", "png", "OR" "media_type", "=", "PNG")->get() as $post)
                        <div class="col-md">
                            <div class="card">
                                <img class="card-img-top" src="{{ URL::to($post->file_path) }}" alt="Card image cap">
                                <div class="card-body" style="color: black">
                                    <h4 class="card-title">{{{ User::where("id", "=", $post->author_id)->first()->pluck("username") }}} | {{{ $post->post_date }}}</h4>
                                    <p class="card-text">{{{ $post->text }}}</p>
                                </div>
                                <div class="card-group" style="color:black;">
                                    <div class="card">
                                        <img style="width: 100%;height: auto;padding: 10px;" src="{{ $post->file_path }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

    @if (Auth::check())
        </div>
    @endif
@stop