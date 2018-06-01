<div class="col-2" style="margin-top:60px;padding-right:0px;background:#5d3bae;">
    <div class="Profile_Header">
        <div class="P_Head">
            <center>
                <img class="Profile_Img" src="{{ URL::to(Auth::user()->profile_img_path) }}"/>
                <span>{{{ Auth::user()->username }}}</span>
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
    <a href="profile.php">
        <div class="Tabets">
            <center><span>Profile</span></center>
        </div>
    </a>
</div>