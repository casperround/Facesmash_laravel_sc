@extends('layouts.public', ["title" => "Home", "sidebar" => false])

@section("content")
    <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
        <style>
            .Post_Container {
                height:150px;
                width:90%;
                border-radius: 5px;
                margin:10px;
                padding:5px;
            }
            body ::-webkit-input-placeholder {
                /* WebKit browsers */
                font-family: 'Source Sans Pro', sans-serif;
                color: black;
                font-weight: 300;
            }
            body :-moz-placeholder {
                /* Mozilla Firefox 4 to 18 */
                font-family: 'Source Sans Pro', sans-serif;
                color: black;
                opacity: 1;
                font-weight: 300;
            }
            body ::-moz-placeholder {
                /* Mozilla Firefox 19+ */
                font-family: 'Source Sans Pro', sans-serif;
                color: black;
                opacity: 1;
                font-weight: 300;
            }
            body :-ms-input-placeholder {
                /* Internet Explorer 10+ */
                font-family: 'Source Sans Pro', sans-serif;
                color: black;
                font-weight: 300;
            }
            .purp-button {
                background-color: #5d3bae;
                color: white;
            }
            .purp-button:hover {
                background-color: #423385;
                color: white;
            }
        </style>
        <div class="Post_Container">
            <div class="row">
                <div class="col-8">
                    <form action="{{ URL::route("home.createNewPost") }}" method="POST">
                        <textarea name="home_post" style="width:100%;height:50px;resize: none;border-radius: 5px;background:#efefef;border-color: #5d3bae;" placeholder="Write something about your day..."></textarea>
                        <div class="col-2">
                            <select name="visability">
                                <option value="1">Public</option>
                                <option value="2">Friends & Friends of friends</option>
                                <option value="3">Friends</option>
                                <option value="4" selected>Only me</option>
                            </select>

                        </div>
                        <button type="submit" class="btn purp-button">Post</button>
                        {{ Form::token() }}
                    </form>
                </div>
                <div class="col">
                    <form action="{{ URL::route("home.createNewPost") }}" method="POST">
                        <div class="form-group">
                            <input class="form-control" type="file" name="file_upload">
                        </div>
                        <button type="submit" class="btn purp-button">Upload</button>

                        {{ Form::token() }}
                    </form>
                </div>
            </div>
        </div>
        @foreach(Posts::where("author_id", "=", Auth::user()->id)->get() as $post)
            <div style="box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);color:black;border-radius: 5px;margin-top:20px;">
                <div class="row" style="width:100%;margin:0px;position: relative;">
                    <div class="col-1">
                        <img class="img" style="height:40px;width:40px;border-radius: 50px;" src="{{ URL::to(Auth::user()->profile_img_path) }}"/>
                    </div>
                    <div class="col-2">
                        <span>{{Auth::user()->username}}</span>
                    </div>
                    <div class="col-2">
                        <span>{{ $post->post_date }}</span>
                    </div>

                </div>
                <div class="card-group" style="color:black;">
                    <div class="card">
                        <img src="">
                    </div>
                </div>
                <div class="card-group" style="color:black;">
                    <div class="card" style="padding:15px;">
                        {{ $post->text }}
                    </div>
                </div>
            </div>
        @endforeach
        </div>
@stop