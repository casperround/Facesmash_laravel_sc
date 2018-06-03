@extends('layouts.public', ["title" => "My Pages", "sidebar" => false])

@section("content")
    @if (Auth::check())

        <!-- Button trigger modal -->
        <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @endif
            <div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">
                <button>Add Page</button>
                <div class="card-columns">

                    <div class="col-md">
                        <div class="card">
                            <video class="card-img-top" src=""></video>
                            <div class="card-body" style="color: black">
                                <h4 class="card-title">Author Username | Posted Date</h4>
                                <p class="card-text">Post Text if any</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @if (Auth::check())
        </div>
    @endif
@stop