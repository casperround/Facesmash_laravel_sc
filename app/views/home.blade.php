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
                    <form action="{{ URL::route("auth.doRegister") }}" method="POST">
                        <textarea name="home_post" style="width:100%;height:50px;resize: none;border-radius: 5px;background:#efefef;border-color: #5d3bae;" placeholder="Write something about your day.."></textarea>
                        <button type="submit" class="btn purp-button">Post</button>
                        {{ Form::token() }}
                    </form>
                </div>
                <div class="col">
                    <form action="{{ URL::route("auth.doRegister") }}" method="POST">
                        <div class="form-group">
                            <input class="form-control" type="file" name="file_upload">
                        </div>
                        <button type="submit" class="btn purp-button">Upload</button>

                        {{ Form::token() }}
                    </form>

                </div>
            </div>

        </div>


    </div>
@stop