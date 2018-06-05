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
                        @if ($post->media_type == 'text')
                        <div class="col-md">
                            <div class="card">
                                <div class="card-body" style="color: black">
                                    <h4 class="card-title">{{{ User::where("id", "=", $post->author_id)->first()->pluck("username") }}} | {{{ $post->post_date }}}</h4>
                                    <p class="card-text">{{{ $post->text }}}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if ($post->media_type == 'jpg' OR $post->media_type == 'png' OR $post->media_type == 'PNG' OR $post->media_type == 'JPG')
                                <div class="col-md">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ URL::to($post->file_path) }}" alt="Card image cap">
                                        <div class="card-body" style="color: black">
                                            <h4 class="card-title">{{{ User::where("id", "=", $post->author_id)->pluck("username") }}} | {{{ $post->post_date }}}</h4>
                                            <p class="card-text">{{{ $post->text }}}</p>
                                        </div>
                                    </div>
                                </div>
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