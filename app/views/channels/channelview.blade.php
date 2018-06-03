@extends('layouts.public', ["title" => "My Channels", "sidebar" => false])

@section("content")
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @endif


            @foreach(Channels::where("owner_id", "=", Auth::user()->id)->get() as $channels)
            <div class="card">
                <img class="card-img-top" src="{{ $channels->unique_channelname }}" alt="Card image cap">
                <div class="card-body">

                    <center><p style="font-size:20px;font-weight:bold;" class="card-text">{{ $channels->unique_channelname }}</p></center>
                </div>
            </div>
            @endforeach
            <div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">
                <div class="card-columns">

                    {{--<a href="#'. $youtube_load['uid'] .'" title="'. $youtube_load['title'] .'">--}}
                        {{--<img style="width:100%;height:auto;" src="'. $youtube_load['thumbnail'] .'" alt="'. $youtube_load['title'] .'" class="img-responsive" height="130px" />--}}
                        {{--<h2>'. $youtube_load['title'] .'</h2>--}}
                        {{--<span class="glyphicon glyphicon-play-circle"></span>--}}
                    {{--</a>--}}
                    {{--</li><br/>--}}
                    {{----}}
                    <script>
                        //For video
                        $(".youtube-video").click(function(e){
                            $(this).children('a').html('<div class="vid"><iframe width="420" height="315" src="https://www.youtube.com/embed/'+ $(this).attr('id') +'?autoplay=1" frameborder="0" allowfullscreen></iframe></div>');
                            return false;
                            e.preventDefault();
                        });
                        //For playlist
                        $(".youtube-playlist").click(function(e){
                            $(this).children('a').html('<div class="vid"><iframe width="420" height="315" src="https://www.youtube.com/embed/videoseries?list='+ $(this).attr('id') +'&autoplay=1" frameborder="0" allowfullscreen></iframe></div>');
                            return false;
                            e.preventDefault();
                        });

                    </script>
                </div>

            </div>

            <script>
                //For video
                $(".youtube-video").click(function(e){
                    $(this).children('a').html('<div class="vid"><iframe width="420" height="315" src="https://www.youtube.com/embed/'+ $(this).attr('id') +'?autoplay=1" frameborder="0" allowfullscreen></iframe></div>');
                    return false;
                    e.preventDefault();
                });
                //For playlist
                $(".youtube-playlist").click(function(e){
                    $(this).children('a').html('<div class="vid"><iframe width="420" height="315" src="https://www.youtube.com/embed/videoseries?list='+ $(this).attr('id') +'&autoplay=1" frameborder="0" allowfullscreen></iframe></div>');
                    return false;
                    e.preventDefault();
                });

            </script>

            @if (Auth::check())
        </div>
    @endif
@stop