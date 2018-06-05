@extends('layouts.public', ["title" => "Public Pages", "sidebar" => false])

@section("content")

    <style>

    </style>
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @endif
            <div class="col-12" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
                @yield("content")
                @include("includes.discover-top")
            </div>

        </div>
@stop