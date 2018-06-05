@extends('layouts.public', ["title" => "My Pages", "sidebar" => false])

@section("content")
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @endif


            @foreach(Pages::where("unique_pagename", "=", $unique_pagename)->limit(1)->get() as $pages)
                <div class="card">
                    <img class="card-img-top" style="height: 50px;width: 50px;" src="{{ URL::to($pages->page_img_path) }}" alt="Card image cap">
                    <div class="card-body">
                        <center>
                            <img style="height: 400px!important;" class="card-img-top" src="{{ URL::to($pages->banner_img_path) }}" alt="Card image cap">
                            <p style="font-size:20px;font-weight:bold;color:black" class="card-text">{{ $pages->unique_pagename }}</p>
                        </center>
                    </div>
                </div>
            @endforeach
            {{--<div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">--}}
                {{--<div class="card-columns">--}}

                    {{--<a href="#'. $youtube_load['uid'] .'" title="'. $youtube_load['title'] .'">--}}
                    {{--<img style="width:100%;height:auto;" src="'. $youtube_load['thumbnail'] .'" alt="'. $youtube_load['title'] .'" class="img-responsive" height="130px" />--}}
                    {{--<h2>'. $youtube_load['title'] .'</h2>--}}
                    {{--<span class="glyphicon glyphicon-play-circle"></span>--}}
                    {{--</a>--}}
                    {{--</li><br/>--}}
                    {{----}}

                {{--</div>--}}

            {{--</div>--}}


            @if (Auth::check())
        </div>
    @endif
@stop