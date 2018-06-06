@extends('layouts.public', ["title" => "Channel", "sidebar" => false])

@section("content")
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @else
                <div class="col-12" style="margin-top:60px;padding:10px;background:#efefef;height:100vh;">

                    <div class="container-fluid">
                        @endif
                        <div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">
                            @foreach(Channels::where("unique_channelname", "=", $unique_channelname)->limit(1)->get() as $channels)
                                <div class="card">
                                    <img class="card-img-top" style="height: 50px;width: 50px;" src="{{ URL::to($channels->channel_img_path) }}" alt="Card image cap">
                                    <div class="card-body">
                                        <center>
                                            <img style="height: 400px!important;" class="card-img-top" src="{{ URL::to($channels->banner_img_path) }}" alt="Card image cap">
                                            <i style="color:#ED5565" class="far fa-file-alt"></i>
                                            <p style="font-size:20px;font-weight:bold;color:black" class="card-text">{{ $channels->unique_channelname }}</p>
                                        </center>
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
                                                    <input name="relation_id" type="hidden" value="{{ $channels->id }}" >
                                                    <input name="unique_channelname" type="hidden" value="{{ $channels->unique_channelname }}" >

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
                                @endif
                                @foreach(Posts::where("relation_id", "=", $channels->id)->where("relation", "=", "channel")->orderBy('post_time', 'DESC')->orderBy('post_date', 'DESC')->get() as $post)
                                    @if ($post->media_type == 'text')
                                        <div style="box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);color:black;border-radius: 5px;margin-top:20px;">
                                            <div class="row" style="width:100%;margin:0px;position: relative;">
                                                <div class="col-1">
                                                    @if ($post->author_id == $channels->owner_id)
                                                        <img class="img" style="height:40px;width:40px;border-radius: 50px;" src="{{ URL::to($channels->channel_img_path) }}"/>
                                                    @else
                                                        <img class="img" style="height:40px;width:40px;border-radius: 50px;" src="{{URL::to(User::where("id", "=", $post->author_id)->limit(1)->pluck("profile_img_path"))}}"/>
                                                    @endif
                                                </div>
                                                <div class="col-2">
                                                    <i style="color:#FFCE54" class="fas fa-pencil-alt"></i>
                                                    @if ($channels->author_id == $channels->owner_id)
                                                        <span>{{ $channels->unique_channelname }}</span>
                                                    @else
                                                        <span>{{User::where("id", "=", $post->author_id)->pluck("username");}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-2">
                                                    <span>{{ $post->post_date }}</span>
                                                </div>

                                            </div>
                                            <div class="card-group" style="color:black;">
                                                <div class="card" style="padding:15px;">
                                                    {{ $post->text }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($post->media_type == 'jpg' OR $post->media_type == 'png' OR $post->media_type == 'PNG' OR $post->media_type == 'JPG')
                                        <div style="box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);color:black;border-radius: 5px;margin-top:20px;">
                                            <div class="row" style="width:100%;margin:0px;position: relative;">
                                                <div class="col-1">
                                                    @if ($post->author_id == $channels->owner_id)
                                                        <img class="img" style="height:40px;width:40px;border-radius: 50px;" src="{{ URL::to($channels->channel_img_path) }}"/>
                                                    @else
                                                        <img class="img" style="height:40px;width:40px;border-radius: 50px;" src="{{URL::to(User::where("id", "=", $post->author_id)->limit(1)->pluck("profile_img_path"))}}"/>
                                                    @endif                                                </div>
                                                <div class="col-2">
                                                    <i style="color:#48CFAD" class="far fa-image"></i>
                                                    @if ($post->author_id == $channels->owner_id)
                                                        <span>{{ $channels->unique_channelname }}</span>
                                                    @else
                                                        <span>{{User::where("id", "=", $post->author_id)->pluck("username");}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-2">
                                                    <span>{{ $post->post_date }}</span>
                                                </div>

                                            </div>
                                            <div class="card-group" style="color:black;">
                                                <div class="card" style="padding:15px;">
                                                    {{ $post->text }}
                                                </div>
                                            </div>
                                            <div class="card-group" style="color:black;">
                                                <div class="card">
                                                    <img style="width: 100%;height: auto;padding: 10px;" src="{{ URL::to($post->file_path) }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach

                        </div>

                        @if (Auth::check())
                    </div>
                    @else
                </div>
        </div>
    @endif
@stop