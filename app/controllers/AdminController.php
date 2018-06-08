<?php
/**
 * Created by PhpStorm.
 * User: roddy
 * Date: 05/06/2018
 * Time: 22:17
 */

class AdminController extends BaseController
{

    public function index() {

        $mainDiscoveryLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "discover")->where("authed_user", "=", 1)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 1)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 1)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 1)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 1)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 1)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 1)->count(),
        ];
        $channelsLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "channels")->where("authed_user", "=", 1)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 1)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 1)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 1)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 1)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 1)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 1)->count(),
        ];
        $gifsLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "gifs")->where("authed_user", "=", 1)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 1)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 1)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 1)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 1)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 1)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 1)->count(),
        ];
        $groupsLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "groups")->where("authed_user", "=", 1)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 1)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 1)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 1)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 1)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 1)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 1)->count(),
        ];
        $pagesLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "pages")->where("authed_user", "=", 1)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 1)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 1)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 1)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 1)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 1)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 1)->count(),
        ];
        $photosLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "photos")->where("authed_user", "=", 1)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 1)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 1)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 1)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 1)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 1)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 1)->count(),
        ];
        $videosLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "videos")->where("authed_user", "=", 1)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 1)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 1)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 1)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 1)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 1)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 1)->count(),
        ];

        $mainDiscoverynonLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "discover")->where("authed_user", "=", 0)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 0)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 0)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 0)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 0)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 0)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "discover")->where("authed_user", "=", 0)->count(),
        ];
        $channelsnonLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "channels")->where("authed_user", "=", 0)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 0)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 0)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 0)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 0)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 0)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "channels")->where("authed_user", "=", 0)->count(),
        ];
        $gifsnonLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "gifs")->where("authed_user", "=", 0)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 0)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 0)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 0)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 0)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 0)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "gifs")->where("authed_user", "=", 0)->count(),
        ];
        $groupsnonLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "groups")->where("authed_user", "=", 0)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 0)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 0)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 0)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 0)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 0)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "groups")->where("authed_user", "=", 0)->count(),
        ];
        $pagesnonLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "pages")->where("authed_user", "=", 0)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 0)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 0)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 0)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 0)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 0)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "pages")->where("authed_user", "=", 0)->count(),
        ];
        $photosnonLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "photos")->where("authed_user", "=", 0)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 0)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 0)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 0)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 0)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 0)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "photos")->where("authed_user", "=", 0)->count(),
        ];
        $videosnonLoggedIn = [
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_type", "=", "videos")->where("authed_user", "=", 0)->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 0)->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 0)->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 0)->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 0)->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 0)->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("content_type", "=", "videos")->where("authed_user", "=", 0)->count(),
        ];

        $totalSiteUsers = User::all()->count();
        $totalSitePosts = Posts::all()->count();
        $totalSiteGroups = Groups::all()->count();
        $totalSiteChannels = Channels::all()->count();


        return View::make("admin.index", [
            "totalSiteUsers" => $totalSiteUsers,
            "totalSitePosts" => $totalSitePosts,
            "totalSiteGroups" => $totalSiteGroups,
            "totalSiteChannels" => $totalSiteChannels,

            "mainDiscoveryLoggedIn" => $mainDiscoveryLoggedIn,
            "channelsLoggedIn" => $channelsLoggedIn,
            "gifsLoggedIn" => $gifsLoggedIn,
            "groupsLoggedIn" => $groupsLoggedIn,
            "pagesLoggedIn" => $pagesLoggedIn,
            "photosLoggedIn" => $photosLoggedIn,
            "videosLoggedIn" => $videosLoggedIn,

            "mainDiscoverynonLoggedIn" => $mainDiscoverynonLoggedIn,
            "channelsnonLoggedIn" => $channelsnonLoggedIn,
            "gifsnonLoggedIn" => $gifsnonLoggedIn,
            "groupsnonLoggedIn" => $groupsnonLoggedIn,
            "pagesnonLoggedIn" => $pagesnonLoggedIn,
            "photosnonLoggedIn" => $photosnonLoggedIn,
            "videosnonLoggedIn" => $videosnonLoggedIn,

        ]);
    }

    public function users() {

        $users = User::orderBy("id", "DESC")->limit(100)->get();

        return View::make("admin.users.users", [
            "users" => $users
        ]);

    }

    public function user($id) {

        $user = User::where("id", "=", $id)->get()->first();

        return View::make("admin.users.user", [
            "user" => $user
        ]);

    }

    public function userPageUpdate($id) {

        $user = User::where("id", "=", $id)->get()->first();

        if (Input::has("username") OR Input::has("email")) {
            $username = Input::get("username");
            $email = Input::get("email");
            $first_name = Input::get("first_name");
            $last_name = Input::get("last_name");
            $date_birth = Input::get("date_birth");
            $country = Input::get("country");
            $theme = Input::get("theme");
            $gender = Input::get("gender");
            $about = Input::get("about");

            if (User::where("username", "=", $username)->count() > 0) {
                return Redirect::route("admin.user", [$user->id]);
            }

            $user->update([
                "username" => $username,
                "email" => $email,
                "first_name" => $first_name,
                "last_name" => $last_name,
                "date_birth" => $date_birth,
                "country" => $country,
                "theme" => $theme,
                "gender" => $gender,
                "about" => $about
            ]);

        }

        if (Input::has("role")) {
            $role = Input::get("role");

            $user->update([
               "role" => $role
            ]);
        }

        if (Input::has("twitter") OR Input::has("youtube") OR Input::has("tumblr") OR Input::has("twitter") OR Input::has("website")) {
            $youtube = Input::get("youtube");
            $facebook = Input::get("facebook");
            $tumblr = Input::get("tumblr");
            $twitter = Input::get("twitter");
            $website = Input::get("website");

            $user->update([
               "youtube" => $youtube,
               "facebook" => $facebook,
               "tumblr" => $tumblr,
               "twitter" => $twitter,
               "website" => $website
            ]);

        }

        return Redirect::route("admin.user", [$user->id]);
    }

    public function userEditGeneralPage($id) {

        $user = User::where("id", "=", $id)->get()->first() ;

        return View::make("admin.users.editGeneralData",[
            "user" => $user
        ]);
    }

    public function doUserEditGeneralPage($id) {
        $user = User::where("id", "=", $id)->get()->first();

        $username = Input::get("username");
        $email = Input::get("email");
        $first_name = Input::get("first_name");
        $last_name = Input::get("last_name");
        $date_birth = Input::get("date_birth");
        $country = Input::get("country");
        $theme = Input::get("theme");
        $gender = Input::get("gender");
        $about = Input::get("about");

        if (!$user->username == $username) {
            if (User::where("username", "=", $username)->count() > 0) {
                return Redirect::route("admin.user", [$user->id]);
            }
        }

        $user->update([
            "username" => $username,
            "email" => $email,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "date_birth" => $date_birth,
            "country" => $country,
            "theme" => $theme,
            "gender" => $gender,
            "about" => $about
        ]);
        return Redirect::route("admin.user", [$user->id]);
    }

}