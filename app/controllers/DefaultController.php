<?php

class DefaultController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function index() {

        if (Auth::check()) {
            return Redirect::route("home");
        }

        return View::make("auth.login");
    }

    public function doLogin()
    {
        $validator = Validator::make(Input::all(), [
            "username" => "required|min:2|max:16",
            "password" => "required"
        ]);

        if ($validator->fails())
        {
            return Redirect::route("index")->withErrors($validator)->withInput();
        }

        if (Auth::attempt(["username" => Input::get('username'), "password" => Input::get('password')]))
        {
            return Redirect::intended("/home");
        }
        return Redirect::route("index")->withErrors($validator)->withInput();
    }

    public function register() {

        if (Auth::check()) {
            return Redirect::route("home");
        }

        return View::make("auth.register");
    }

    public function doRegister() {

        $validator = Validator::make(Input::all(), [
            "username" => "required|min:2|max:16|unique:users,username",
            "email" => "required",
            "password" => "required"
        ]);

        if ($validator->fails())
        {
            return Redirect::route("register")->withErrors($validator)->withInput();
        }

        $username = Input::get("username");
        $email = Input::get("email");
        $password = Input::get("password");

        User::create([
            "username" => $username,
            "email" => $email,
            "password" => Hash::make($password)
        ]);

        Auth::attempt(["username" => $username, "password" => $password]);

        return Redirect::intended("/home");

    }

    public function doLogout()
    {
        Auth::logout();
        return Redirect::route("index");
    }

    public function homePage() {

        if (!Auth::check()) {
            return Redirect::route("index");
        }

        return View::make("home");
    }

    public function userProfilePage($username) {

        $user = User::where("username", "=", $username)->first();

        return View::make("userProfile", [
            "user" => $user
        ]);

    }

    public function editMyProfilePage() {
        return View::make("account.editprofile");
    }

    public function doEditMyProfile() {

    }

    public function homePageFormPost() {

        if (Input::hasFile("file_upload")) {

            $uid = str_random(10);

            $savePath = 'data_store/post_media/';
            $file = Input::file('file_upload');
            $fileExtension = $file->getClientOriginalExtension();
            $filename = $uid . '.' . $file->getClientOriginalExtension();

            $file->move($savePath, $filename);
            $filePath = $savePath . $filename;

            $media_type = $fileExtension;
            $home_post = Input::get("home_post");
            $author_id = Auth::user()->id;
            $post_time = date("H:i:s");
            $post_date = date("d-m-Y");

            Posts::create([
                "post_id" => $uid,
                "author_id" => $author_id,
                "text" => $home_post,
                "post_time" => $post_time,
                "post_date" => $post_date,
                "file_path" => $filePath,
                "file_extension" => $fileExtension,
                "media_type" => $media_type
            ]);

        }

        elseif (Input::has("home_post")) {

            $home_post = Input::get("home_post");
            $author_id = Auth::user()->id;
            $post_id = str_random(10);
            $media_type = "text";
            $post_time = date("H:i:s");
            $post_date = date("d-m-Y");
            $visibility = Input::get("visibility");

            Posts::create([
                "post_id" => $post_id,
                "author_id" => $author_id,
                "text" => $home_post,
                "post_time" => $post_time,
                "post_date" => $post_date,
                "visibility" => $visibility,
                "media_type" => $media_type
            ]);

        }

        return Redirect::route("home");

    }

    public function contactPage() {
        return View::make("contact");
    }

//==============================================
//Discover Page Controller
//==============================================
    public function discoverPage() {
        return View::make("discover");
    }
    public function discoverChannelPage() {
        return View::make("discover.channel");
    }
    public function discoverGifPage() {
        return View::make("discover.gif");
    }
    public function discoverGroupPage() {
        return View::make("discover.group");
    }
    public function discoverPagesPage() {
        return View::make("discover.page");
    }
    public function discoverPhotoPage() {
        return View::make("discover.photos");
    }
    public function discoverVideoPage() {
        return View::make("discover.videos");
    }
//==============================================
// Pages Controller
//==============================================
    public function userPagesPage() {
        return View::make("pages.userpage");
    }
    public function userPagesNewPage() {

        $validator = Validator::make(Input::all(), [
            "unique_pagename" => "required|min:2|max:16|unique:pages,unique_pagename"
        ]);
        if ($validator->fails())
        {
            return Redirect::route("pages.userpage")->withErrors($validator)->withInput();
        }
        $unique_pagename = Input::get("unique_pagename");
        $uid = str_random(10);
        $owner_id = Auth::user()->id;
        $about = Input::get("about");
        $website = Input::get("website");
        $twitter = Input::get("twitter");
        $facebook = Input::get("facebook");
        $youtube = Input::get("youtube");
        $category = Input::get("category");
        $post_time = date("H:i:s");
        $post_date = date("d-m-Y");

        Pages::create([
            "unique_pagename" => $unique_pagename,
            "uid" => $uid,
            "owner_id" => $owner_id,
            "about" => $about,
            "website" => $website,
            "twitter" => $twitter,
            "facebook" => $facebook,
            "youtube" => $youtube,
            "category" => $category,
            "post_time" => $post_time,
            "post_date" => $post_date
        ]);
        return Redirect::route("pages.userpage");
    }
    public function pagesviewPage($unique_pagename) {
        return View::make("pages.pageview", [
            "unique_pagename" => $unique_pagename
        ]);

    }





//==============================================
// Events Controller
//==============================================
    public function userEventsPage() {
        return View::make("events.userevent");
    }
    public function userEventsNewPage() {

        $validator = Validator::make(Input::all(), [
            "unique_eventname" => "required|min:2|max:16|unique:events,unique_eventname"
        ]);
        if ($validator->fails())
        {
            return Redirect::route("events.userevent")->withErrors($validator)->withInput();
        }
        $unique_eventname = Input::get("unique_eventname");
        $uid = str_random(10);
        $owner_id = Auth::user()->id;
        $about = Input::get("about");
        $website = Input::get("website");
        $twitter = Input::get("twitter");
        $facebook = Input::get("facebook");
        $youtube = Input::get("youtube");
        $category = Input::get("category");
        $post_time = date("H:i:s");
        $post_date = date("d-m-Y");

        Events::create([
            "unique_eventname" => $unique_eventname,
            "uid" => $uid,
            "owner_id" => $owner_id,
            "about" => $about,
            "website" => $website,
            "twitter" => $twitter,
            "facebook" => $facebook,
            "youtube" => $youtube,
            "category" => $category,
            "post_time" => $post_time,
            "post_date" => $post_date
        ]);
        return Redirect::route("events.userevent");
    }
    public function eventsviewPage($unique_eventname) {
        return View::make("events.eventview", [
            "unique_eventname" => $unique_eventname
        ]);

    }

//==============================================
// Groups Controller
//==============================================
    public function userGroupsPage() {
        return View::make("groups.usergroup");
    }
    public function userGroupsNewPage() {

        $validator = Validator::make(Input::all(), [
            "unique_groupname" => "required|min:2|max:16|unique:groups,unique_groupname"
        ]);
        if ($validator->fails())
        {
            return Redirect::route("groups.usergroup")->withErrors($validator)->withInput();
        }
        $unique_groupname = Input::get("unique_groupname");
        $uid = str_random(10);
        $owner_id = Auth::user()->id;
        $about = Input::get("about");
        $website = Input::get("website");
        $twitter = Input::get("twitter");
        $facebook = Input::get("facebook");
        $youtube = Input::get("youtube");
        $category = Input::get("category");
        $post_time = date("H:i:s");
        $post_date = date("d-m-Y");

        Groups::create([
            "unique_groupname" => $unique_groupname,
            "uid" => $uid,
            "owner_id" => $owner_id,
            "about" => $about,
            "website" => $website,
            "twitter" => $twitter,
            "facebook" => $facebook,
            "youtube" => $youtube,
            "category" => $category,
            "post_time" => $post_time,
            "post_date" => $post_date
        ]);
        return Redirect::route("groups.usergroup");
    }
    public function groupsviewPage($unique_groupname) {
        return View::make("groups.groupview", [
            "unique_groupname" => $unique_groupname
        ]);

    }

//==============================================
// Channels Controller
//==============================================
    public function userChannelsPage() {
        return View::make("channels.userchannel");
    }
    public function userChannelsNewPage() {

        $validator = Validator::make(Input::all(), [
            "unique_channelname" => "required|min:2|max:16|unique:channels,unique_channelname"
        ]);
        if ($validator->fails())
        {
            return Redirect::route("channels.userchannel")->withErrors($validator)->withInput();
        }
        $unique_channelname = Input::get("unique_channelname");
        $uid = str_random(10);
        $owner_id = Auth::user()->id;
        $about = Input::get("about");
        $website = Input::get("website");
        $twitter = Input::get("twitter");
        $facebook = Input::get("facebook");
        $youtube = Input::get("youtube");
        $category = Input::get("category");
        $post_time = date("H:i:s");
        $post_date = date("d-m-Y");

        Channels::create([
            "unique_channelname" => $unique_channelname,
            "uid" => $uid,
            "owner_id" => $owner_id,
            "about" => $about,
            "website" => $website,
            "twitter" => $twitter,
            "facebook" => $facebook,
            "youtube" => $youtube,
            "category" => $category,
            "post_time" => $post_time,
            "post_date" => $post_date
        ]);
        return Redirect::route("channels.userchannel");
    }
    public function channelsviewPage($unique_channelname) {
        return View::make("channels.channelview", [
            "unique_channelname" => $unique_channelname
        ]);


    }

//==============================================
// Pictures Controller
//==============================================
    public function userPicturesPage() {
        return View::make("pictures.userpicture");
    }
    public function picturesviewPage($unique_picturename) {
        return View::make("pictures.pictureview", [
            "unique_picturename" => $unique_picturename
        ]);


    }
//==============================================
// Videos Controller
//==============================================
    public function userVideosPage() {
        return View::make("videos.uservideo");
    }
    public function videosviewPage($unique_videoname) {
        return View::make("videos.videoview", [
            "unique_videoname" => $unique_videoname
        ]);


    }
}
