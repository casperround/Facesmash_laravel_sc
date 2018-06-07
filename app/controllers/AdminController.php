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
            "todayVisitors" => UserContentViews::whereDate("date", "=", date("Y-m-d"))->where("content_id", "=", "main_page")->where("content_type", "=", "discover")->count(),
            "yesterdayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->count(),
            "3dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->count(),
            "4dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->count(),
            "5dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->count(),
            "6dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->count(),
            "7dayVisitors" => UserContentViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->count(),
        ];

        $totalSiteUsers = User::all()->count();
        $newest100Users = User::orderBy("id", "DESC")->limit(100)->get();

        return View::make("admin.index", [
            "totalSiteUsers" => $totalSiteUsers,
            "newest100Users" => $newest100Users,
            "mainDiscoveryLoggedIn" => $mainDiscoveryLoggedIn
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

    public function userPageUpdateInfo($id) {

        $user = User::where("id", "=", $id)->get()->first();

        if (Input::has("username")) {

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



        }

        if (Input::has("twitter")) {



        }

        return Redirect::route("admin.user", [$user->id]);
    }

}