@extends('layouts.public', ["title" => "My Pages", "sidebar" => false])

@section("content")
    @if (Auth::check())
        <div class="col-8" style="overflow-y:scroll;margin-top:60px;padding:10px;background:#efefef;height:100vh;">
            @endif

            <style class="cp-pen-styles">
                #container {
                    margin: auto;
                    width: 400px;
                    height: 400px;
                    background-color: #f0f0f0;
                    position: relative;
                    display: flex;
                }

                #z_button {
                    background-color: #d44949;
                    height: 50px;
                    position: absolute;
                    outline: 0;
                    display: block;
                    /* animation */
                    margin: 250px 0px 0px 20px;
                    color: #fff;
                    border-radius: 100%;
                    width: 50px;
                }

                #z_button:hover {
                    cursor: default;
                }

                #z_plus {
                    text-align: center;
                    line-height: 50px;
                    font-size: 30px;
                }

                .z_menu {
                    z-index: 2;
                    width: 100px;
                    text-align: center;
                    margin-bottom: 17px;
                    text-decoration: none;
                    color: #fff;
                    opacity: 0;
                    align-self: flex-end;
                    visibility: hidden;
                }

                .z_menu:hover {
                    text-decoration: underline;
                }</style
            <div id="container">
                <div id="z_button" tabindex="0">
                    <div id="z_plus">+</div>
                </div>
                <a href="#" onclick="alert('clicked')" class="z_menu">Comment</a>
                <a href="#" onclick="alert('clicked')" class="z_menu">Like</a>
                <a href="#" onclick="alert('clicked')" class="z_menu">Subscribe</a>
                <a href="#" onclick="alert('clicked')" class="z_menu">Share</a>
            </div>

            <div class="col-md" style="overflow-y:scroll;margin-top:10px;padding:10px;background:#efefef;height:100vh;">
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">Add Page</i></a>

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
            <script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
            <script >$(document).ready(function() {
                    $('#z_button').focus(function() {
                        $(this).animate({
                            marginTop: "350px",
                            borderRadius: "0%"
                        }, {
                            duration: 250,
                            easing: "easeOutQuad"
                        }).animate({
                            marginLeft: "0px",
                            width: "100%"
                        }, {
                            duration: 250
                        });

                        $('#z_plus').animate({
                            opacity: 0
                        }, {
                            duration: 100
                        });

                        $('#container a:nth-child(2)').css({
                            "visibility": "visible"
                        }).delay(250).animate({
                            opacity: 1
                        }, {
                            duration: 250
                        });
                        $('#container a:nth-child(3)').css({
                            "visibility": "visible"
                        }).delay(300).animate({
                            opacity: 1
                        }, {
                            duration: 250
                        });
                        $('#container a:nth-child(4)').css({
                            "visibility": "visible"
                        }).delay(350).animate({
                            opacity: 1
                        }, {
                            duration: 250
                        });
                        $('#container a:nth-child(5)').css({
                            "visibility": "visible"
                        }).delay(400).animate({
                            opacity: 1
                        }, {
                            duration: 250
                        });
                    }).blur(function() {
                        $('#container a:nth-child(2)').delay(300).animate({
                            opacity: 0
                        }, {
                            duration: 150,
                            complete: function() {
                                $('#container a:nth-child(2)').css({
                                    "visibility": "hidden"
                                })
                            }
                        });
                        $('#container a:nth-child(3)').delay(250).animate({
                            opacity: 0
                        }, {
                            duration: 150,
                            complete: function() {
                                $('#container a:nth-child(3)').css({
                                    "visibility": "hidden"
                                })
                            }
                        });
                        $('#container a:nth-child(4)').delay(200).animate({
                            opacity: 0
                        }, {
                            duration: 150,
                            complete: function() {
                                $('#container a:nth-child(4)').css({
                                    "visibility": "hidden"
                                })
                            }
                        });
                        $('#container a:nth-child(5)').delay(150).animate({
                            opacity: 0
                        }, {
                            duration: 150,
                            complete: function() {
                                $('#container a:nth-child(5)').css({
                                    "visibility": "hidden"
                                })
                            }
                        });

                        $('#z_plus').delay(400).animate({
                            opacity: 1
                        }, {
                            duration: 100
                        });

                        $(this).delay(400).animate({
                            marginLeft: "20px",
                            width: "50px"
                        }, {
                            duration: 150
                        }).animate({
                            marginTop: "250px",
                            borderRadius: "100%"
                        }, {
                            duration: 150,
                            easing: "easeOutQuad"
                        });
                    });
                });
                //# sourceURL=pen.js
            </script>
            @if (Auth::check())
        </div>

    @endif
@stop