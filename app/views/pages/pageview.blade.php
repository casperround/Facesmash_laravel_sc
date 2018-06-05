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
                        <div class="Post_Container">
                            <form enctype="multipart/form-data" action="{{ URL::route("pages.createNewPost") }}" method="POST">
                                <div class="row">
                                    <div class="col-8">
                                        <textarea name="home_post" style="width:100%;height:50px;resize: none;border-radius: 5px;background:#efefef;border-color: #5d3bae;" placeholder="Write something about your day..."></textarea>
                                        <div class="form-group">
                                            <select class="form-control" name="visibility">
                                                <option value="1">Public</option>
                                                <option value="2">Friends & Friends of friends</option>
                                                <option value="3">Friends</option>
                                                <option value="4" selected>Only me</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn purp-button">Post</button>
                                    </div>
                                    <div class="col">
                                        <input name="file_upload" class="form-control" type="file" onchange="readURL(this);" >
                                        <img id="blah" src="#" style="box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);margin: 20px;" alt="your image">
                                        <script>
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();

                                                    reader.onload = function (e) {
                                                        $('#blah')
                                                            .attr('src', e.target.result)
                                                            .width(150)
                                                            .height(auto);
                                                    };
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                        {{ Form::token() }}
                                    </div>
                                </div>
                            </form>
                        </div>
                        @if (Auth::check())
                    </div>
                    @else
                </div>
        </div>
    @endif
@stop