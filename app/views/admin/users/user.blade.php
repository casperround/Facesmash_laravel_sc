@extends('layouts.admin', ["title" => "User:" . $user->username, "sidebar" => false])

@section('content')
    <h1>User: {{{ $user->username }}}</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="m-portlet m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                User Info
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <form class="form-control" src="" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" name="username" value="{{{ $user->username }}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" value="{{{ $user->email }}}">
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" name="first_name" value="{{{ $user->first_name }}}">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" name="last_name" value="{{{ $user->last_name }}}">
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input class="form-control" name="date_birth" value="{{{ $user->date_birth }}}">
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input class="form-control" name="country" value="{{{ $user->country }}}">
                        </div>
                        <div class="form-group">
                            <label>Theme</label>
                            <input class="form-control" name="theme" value="{{{ $user->theme }}}">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input class="form-control" name="gender" value="{{{ $user->gender }}}">
                        </div>
                        <div class="form-group">
                            <label>About</label>
                            <textarea rows="5" class="form-control" name="about">{{{ $user->about }}}</textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop