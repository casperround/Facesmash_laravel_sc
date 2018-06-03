@extends('layouts.public', ["title" => "My Pages", "sidebar" => false])

@section("content")
    @if (Auth::check())
        <a data-toggle="modal" href="#normalModal" class="btn btn-default">Normal</a>


        <div id="normalModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body&hellip;</p>
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
            <script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src='//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'></script>
            <script >// when .modal-wide opened, set content-body height based on browser height; 200 is appx height of modal padding, modal title and button bar

                $(".modal-wide").on("show.bs.modal", function() {
                    var height = $(window).height() - 200;
                    $(this).find(".modal-body").css("max-height", height);
                });
                //# sourceURL=pen.js
            </script>
            @if (Auth::check())
        </div>
    @endif
@stop