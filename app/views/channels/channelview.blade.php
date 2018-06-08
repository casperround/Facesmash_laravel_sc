@extends('layouts.public', ["title" => $channel->unique_channelname, "sidebar" => false])
@section("in-head")
    <meta property="og:url" content="https://www.facesmash.co.uk/channel/{{ $channel->unique_channelname }}">
    {{--<meta property="og:type" content="website">--}}
    <meta property="og:title" content="{{ $channel->unique_channelname }}">
    <meta property="og:description" content="{{ $channel->about }}">
    <meta property="og:image" content="{{ URL::to($channel->banner_img_path) }}">
    {{--<meta name="theme-color" content="#ffffff">--}}
    {{--<meta content="Casper Round" name="author">--}}
@stop
@section("content")
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @else
                <div class="col-12" style="margin-top:60px;padding:10px;background:#efefef;height:100vh;">

                    <div class="container-fluid">
                        @endif
                        <div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">
                                <div class="card" style="border:0px;background:#5d3bae;">
                                    <div class="card-body" style="padding:0px;    background-position: 73%;
    background-repeat: no-repeat;
    background-size: cover;
    margin: 0 auto;
    max-height: 200px;
    max-width: 100%;
    overflow: hidden;">
                                        <img class="card-img-top" style="z-index:10;position: relative;height: 50px;width: 50px;" src="{{ URL::to($channel->channel_img_path) }}" alt="Card image cap">

                                        <center>

                                            <img style="top: -150px;position:relative;height: 400px!important;" class="card-img-top" src="{{ URL::to($channel->banner_img_path) }}" alt="Card image cap">

                                        </center>
                                    </div>
                                    <div class="card-body" style="padding:20px;background:white;">
                                        <i style="color:#A0D468" class="fas fa-tv"></i>
                                        <p style="font-size:20px;font-weight:bold;color:black" class="card-text">{{ $channel->unique_channelname }}</p>
                                    </div>
                                </div>
                                @if (Auth::check())

                                    <div class="Post_Container">
                                        <form enctype="multipart/form-data" action="{{ URL::route("channels.createNewPost") }}" method="POST">
                                            <div class="row">
                                                <div class="col-8">
                                                    <textarea name="home_post" style="width:100%;height:50px;resize: none;border-radius: 5px;background:#efefef;border-color: #5d3bae;" placeholder="Write something about your day..."></textarea>
                                                    <button type="submit" class="btn purp-button">Post</button>
                                                </div>
                                                <div class="col">
                                                    <input name="file_upload" class="form-control" type="file" onchange="readURL(this);" >
                                                    <input name="relation_id" type="hidden" value="{{ $channel->id }}" >
                                                    <input name="unique_channelname" type="hidden" value="{{ $channel->unique_channelname }}" >

                                                    <video controls id="blah" src="#" style="box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);margin: 20px;" alt="your image"></video>
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
                                @endif
                                <div class="row" style="width:100%;margin:0px;position: relative;">

                                @foreach(Posts::where("relation_id", "=", $channel->id)->where("relation", "=", "channel")->orderBy('post_time', 'DESC')->orderBy('post_date', 'DESC')->get() as $post)
                                    @if ($post->media_type == 'mp4' OR $post->media_type == 'MP4')
                                        <div class="col-md-6" style="max-width:45%;height:100%;padding:0px;margin:10px;display:inline-block;background:white;box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);color:white;border-radius: 5px;margin-top:20px;">
                                            <div class="row" style="width:auto;margin:0px;border-radius:0px;background:#5d3bae;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);color:white;position: relative;">
                                                <div class="col-4">
                                                    @if ($post->author_id == $channel->owner_id)
                                                        <img class="img" style="height:40px;width:40px;border-radius: 50px;" src="{{ URL::to($channel->channel_img_path) }}"/>
                                                    @else
                                                        <img class="img" style="height:40px;width:40px;border-radius: 50px;" src="{{URL::to(User::where("id", "=", $post->author_id)->limit(1)->pluck("profile_img_path"))}}"/>
                                                    @endif                                                </div>
                                                <div class="col-4">
                                                    <i style="color:#AC92EC" class="fas fa-video"></i>
                                                    @if ($post->author_id == $channel->owner_id)
                                                        <span>{{ $channel->unique_channelname }}</span>
                                                    @else
                                                        <span>{{User::where("id", "=", $post->author_id)->pluck("username");}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-4">
                                                    <span>{{ $post->post_date }}</span>
                                                </div>

                                            </div>
                                            <div class="card-group" style="color:black;">
                                                <div class="card" style="background:#efefef;border:0px;padding:15px;color:black;">
                                                    {{ $post->text }}
                                                </div>
                                            </div>
                                            <div class="card-group" style="background:#efefef;border:0px;color:black;">
                                                <div class="card" style="background:#efefef;border:0px;">
                                                    <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
                                                           poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                                                        <source src="{{ URL::to($post->file_path) }}" type='video/mp4'>
                                                        <source src="{{ URL::to($post->file_path) }}" type='video/webm'>
                                                        <p class="vjs-no-js">
                                                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                                                        </p>
                                                    </video>
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
        </div>
    @endif
@stop