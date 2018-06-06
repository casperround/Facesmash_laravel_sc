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
                                <div class="card" style="background:#5d3bae;">
                                    <img class="card-img-top" style="height: 50px;width: 50px;" src="{{ URL::to($channels->channel_img_path) }}" alt="Card image cap">
                                    <div class="card-body">
                                        <center>
                                            <img style="height: 400px!important;" class="card-img-top" src="{{ URL::to($channels->banner_img_path) }}" alt="Card image cap">
                                            <i style="color:#A0D468" class="fas fa-tv"></i>
                                            <p style="font-size:20px;font-weight:bold;color:white" class="card-text">{{ $channels->unique_channelname }}</p>
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

                                @foreach(Posts::where("relation_id", "=", $channels->id)->where("relation", "=", "channel")->orderBy('post_time', 'DESC')->orderBy('post_date', 'DESC')->get() as $post)
                                    @if ($post->media_type == 'mp4' OR $post->media_type == 'MP4')
                                        <div class="col-md-3" style="max-width: 23%;padding:1px;margin:10px;display:inline-block;background:white;box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);color:white;border-radius: 5px;margin-top:20px;">
                                            <div class="row" style="width:auto;margin:5px;border-radius:10px;background:#5d3bae;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);color:white;position: relative;">
                                                <div class="col-4">
                                                    @if ($post->author_id == $channels->owner_id)
                                                        <img class="img" style="height:40px;width:40px;border-radius: 50px;" src="{{ URL::to($channels->channel_img_path) }}"/>
                                                    @else
                                                        <img class="img" style="height:40px;width:40px;border-radius: 50px;" src="{{URL::to(User::where("id", "=", $post->author_id)->limit(1)->pluck("profile_img_path"))}}"/>
                                                    @endif                                                </div>
                                                <div class="col-4">
                                                    <i style="color:#AC92EC" class="fas fa-video"></i>
                                                    @if ($post->author_id == $channels->owner_id)
                                                        <span>{{ $channels->unique_channelname }}</span>
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
                                                    <video controls style="width: 100%;height: auto;padding: 10px;" src="{{ URL::to($post->file_path) }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
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