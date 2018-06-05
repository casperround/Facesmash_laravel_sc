@extends('layouts.public', ["title" => "Discover pages", "sidebar" => false])

@section("content")
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @endif
            <div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">
                @include("includes.discover-top")
                <div class="card-columns">
                    @foreach(Pages::all() as $pages)
                        <div class="col-md">
                            <div class="card" style="margin-bottom:0px;">
                                <a href="{{ URL::route("pagesview", $pages->unique_pagename) }}"><div class="card">
                                        <img class="card-img-top" src="{{ URL::to($pages->banner_img_path) }}" alt="Card image cap">
                                        <div class="card-body">
                                            <center><p style="font-size:20px;font-weight:bold;color:black;" class="card-text">{{ $pages->unique_pagename }}</p></center>
                                        </div>
                                    </div></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            @if (Auth::check())
        </div>
    @endif
@stop