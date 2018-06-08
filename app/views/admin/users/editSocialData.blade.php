<form class="form-control" action="{{ URL::route("admin.userEdit", [$user->id]) }}" method="post">
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