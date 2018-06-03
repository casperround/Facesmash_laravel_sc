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



        }

        if (Input::has("home_post")) {

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
        return View::make("discover.photo");
    }
    public function discoverVideoPage() {
        return View::make("discover.video");
    }
//==============================================
//User Pages,Groups,Events,Channels Controller
//==============================================
    public function userPagesPage() {
        return View::make("pages.userpage");
    }
    public function userPagesNewPage() {

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
        return Redirect::route("pages");
    }


    public function userEventsPage() {
        return View::make("events.userevent");
    }
    public function userGroupsPage() {
        return View::make("groups.usergroup");
    }
    public function userChannelsPage() {
        return View::make("channels.userchannel");
    }

}
