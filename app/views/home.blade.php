<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="{{ URL::to("assets/css/bootstrap.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to("assets/css/style.css") }}">

    @include("includes.sitewidemeta")
</head>

<body>
<div class="Navbar">
    <nav class="navbar navbar-expand-lg" style="height:60px">
        <a class="navbar-brand" href="#">
            <img src="/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Facesmash
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ URL::route("home") }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="discover.php">Discover</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route("auth.logout") }}">Logout</a>
                </li>
            </ul>
            <form class="form-inline" action="search.php" method="GET">
                <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>

<style>
    .Profile_Header {
        height:100px;
        width:100%;
        background: url({{ URL::to("assets/img/cover.jpg") }}) no-repeat center;

        background-size: cover;
    }
    .Tabets {
        height:40px;
        width:100%;
        transition: background 0.2s;
    }
    .Tabets:hover {
        background: #656D78;
        transition: background 0.2s;
    }
    .P_Head {
        height:50%;
        padding:10px;
        position: relative;

    }
    .Profile_Img {
        border-radius: 50px;
        height:50px;
        width:50px;
        margin-left: auto;
        margin-right:auto;
    }
</style>

<div class="row">

    @include("includes.left-profile")


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

        <div style="box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);color:black;border-radius: 5px;margin-top:20px;">


        </div>

    </div>
    <div class="col-2 Back" style="margin-top:60px;padding-top:10px;overflow-y:scroll;height:100vh;padding:0px;box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
">
        @include("includes.chat-container")
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>