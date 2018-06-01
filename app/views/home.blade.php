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
        </style>
        <div class="Post_Container">
            <form action="file_upload_feed.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-8">
                        <textarea name="MediaTxt" style="width:100%;height:50px;resize: none;border-radius: 5px;background:#efefef;border-color: #5d3bae;">Write something about your day..</textarea>
                    </div>
                    <div class="col-4">
                        <input style="width:100%;font-size:10px;background:#5d3bae;border-color: #5d3bae;" type="file" id="file" multiple="multiple" name="files[]" accept="image/*" />

                    </div>

                </div>
                <div class="row">
                    <div class="col-8">

                    </div>
                    <div class="col-2">
                        <div class="dropdown">
                            <button style="width:100%;font-size:10px;background:#5d3bae;border-color: #5d3bae;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Visibility
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Public</a>
                                <a class="dropdown-item" href="#">Friends & Friends of friends</a>
                                <a class="dropdown-item" href="#">Friends</a>
                                <a class="dropdown-item" href="#">Only me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <input style="width:100%;font-size:10px;background:#5d3bae;border-color: #5d3bae;" type="submit" name="upload" value="Upload!" />

                    </div>
                </div>
            </form>

        </div>


    </div>
@stop