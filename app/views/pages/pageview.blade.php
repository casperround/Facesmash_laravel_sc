@extends('layouts.public', ["title" => "Discover", "sidebar" => false])

@section("content")
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @else
                <div class="col-12" style="margin-top:60px;padding:10px;background:#efefef;height:100vh;">

                    <div class="container-fluid">
                        @endif
                        <div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">
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
                        </div>

                        @if (Auth::check())
                    </div>
                    @else
                </div>
        </div>
    @endif
@stop