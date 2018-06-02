<div class="col-2" style="margin-top:60px;padding-right:0px;background:#5d3bae;">
    <div class="Profile_Header">
        <div class="P_Head">
            <center>
                <img style="margin-left: 5px" class="Profile_Img" src="{{ URL::to(Auth::user()->profile_img_path) }}">
                <br>
                <h4>{{{ Auth::user()->username }}}</h4>
            </center>
        </div>
    </div>
    <a href="{{ URL::route("home") }}">
        <div class="Tabets">
            <center><span>Home</span></center>
        </div>
    </a>
    <a href="pictures.php">
        <div class="Tabets">
            <center><span>Pictures</span></center>
        </div>
    </a>
    <a href="videos.php">
        <div class="Tabets">
            <center><span>Videos</span></center>
        </div>
    </a>
    <a href="{{ URL::route("userProfile", [Auth::user()->username]) }}">
        <div class="Tabets">
            <center><span>My Profile</span></center>
        </div>
    </a>
    <a href="{{ URL::route("userPages") }}">
        <div class="Tabets">
            <center><span>My Pages</span></center>
        </div>
    </a>
    <a href="{{ URL::route("userGroups") }}">
        <div class="Tabets">
            <center><span>My Groups</span></center>
        </div>
    </a>
    <a href="{{ URL::route("userEvents") }}">
        <div class="Tabets">
            <center><span>My Events</span></center>
        </div>
    </a>
    <a href="{{ URL::route("userChannels") }}">
        <div class="Tabets">
            <center><span>My Channels</span></center>
        </div>
    </a>
</div>