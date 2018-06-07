@extends('layouts.admin', ["title" => "User: " . $user->username, "sidebar" => false])

@section('content')
    <h1>User: {{{ $user->username }}}</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="m-portlet m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                View/Edit User Info
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#generalDataModal">General Data</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#socialMediaDataModal">Social Media Data</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="m-portlet m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                User Graphics
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <p>Users Profile Image</p>
                    <img height="70" src="{{ URL::to($user->profile_img_path) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="m-portlet m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Admin Data/Functions
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <form class="form-control">
                        <div class="form-group">
                            <label>Account Created</label>
                            <input readonly class="form-control" value="{{{ $user->created_at }}}">
                        </div>
                        <div class="form-group">
                            <label>Account Last Updated</label>
                            <input readonly class="form-control" value="{{{ $user->updated_at }}}">
                        </div>
                    </form>
                    <br>
                    <form class="form-control" src="{{ URL::route("admin.user.editData", [$user->id]) }}" method="post">
                        <div class="form-group">
                            <label>User Role</label>
                            <select class="form-control" name="role">
                                <option value="1">Standard User</option>
                                <option value="0">Suspended User</option>
                                <optgroup label=""></optgroup>
                                <option value="2">Admin</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="generalDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">General Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="height: 500px; overflow-y: scroll">
                    <form class="form-control" src="{{ URL::route("admin.user.editData", [$user->id]) }}" method="post">
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
                        <button type="submit" class="btn btn-primary">Update</button>
                        {{ Form::token() }}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="socialMediaDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Social Media Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="height: 500px; overflow-y: scroll">
                    <form class="form-control" src="{{ URL::route("admin.user.editData", [$user->id]) }}" method="post">
                        <div class="form-group">
                            <label>Youtube</label>
                            <input class="form-control" name="youtube" value="{{{ $user->youtube }}}">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input class="form-control" name="facebook" value="{{{ $user->facebook }}}">
                        </div>
                        <div class="form-group">
                            <label>Tumblr</label>
                            <input class="form-control" name="tumblr" value="{{{ $user->tumblr }}}">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input class="form-control" name="twitter" value="{{{ $user->twitter }}}">
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input class="form-control" name="website" value="{{{ $user->website }}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        {{ Form::token() }}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop