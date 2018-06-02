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

            Posts::create([
                "post_id" => $post_id,
                "author_id" => $author_id,
                "text" => $home_post,
                "post_time" => $post_time,
                "post_date" => $post_date,
                "media_type" => $media_type
            ]);

        }

        return Redirect::route("home");

    }

    public function contactPage() {
        return View::make("contact");
    }
    public function discoverPage() {
        return View::make("discover");
    }

}
