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

        $mainDiscoverViews = [
            "todayVisitors" => OpenDiscoverViews::where("date", "=", date("Y-m-d"))->where("discover_page", "=", "discover")->count(),
            "yesterdayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("discover_page", "=", "discover")->count(),
            "3dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("discover_page", "=", "discover")->count(),
            "4dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("discover_page", "=", "discover")->count(),
            "5dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("discover_page", "=", "discover")->count(),
            "6dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("discover_page", "=", "discover")->count(),
            "7dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("discover_page", "=", "discover")->count(),
        ];

        $discoverChannelViews = [
            "todayVisitors" => OpenDiscoverViews::where("date", "=", date("Y-m-d"))->where("discover_page", "=", "channel")->count(),
            "yesterdayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("discover_page", "=", "channel")->count(),
            "3dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("discover_page", "=", "channel")->count(),
            "4dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("discover_page", "=", "channel")->count(),
            "5dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("discover_page", "=", "channel")->count(),
            "6dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("discover_page", "=", "channel")->count(),
            "7dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("discover_page", "=", "channel")->count(),
        ];

        $discoverGifViews = [
            "todayVisitors" => OpenDiscoverViews::where("date", "=", date("Y-m-d"))->where("discover_page", "=", "gif")->count(),
            "yesterdayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-1 days")))->where("discover_page", "=", "gif")->count(),
            "3dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-2 days")))->where("discover_page", "=", "gif")->count(),
            "4dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-3 days")))->where("discover_page", "=", "gif")->count(),
            "5dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-4 days")))->where("discover_page", "=", "gif")->count(),
            "6dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-5 days")))->where("discover_page", "=", "gif")->count(),
            "7dayVisitors" => OpenDiscoverViews::whereDate("date", "=", date('Y-m-d',strtotime("-6 days")))->where("discover_page", "=", "gif")->count(),
        ];

        $totalSiteUsers = User::all()->count();
        $newest100Users = User::orderBy("id", "DESC")->limit(100)->get();

        return View::make("admin.index", [
            "totalSiteUsers" => $totalSiteUsers,
            "newest100Users" => $newest100Users,
            "mainDiscoverViews" => $mainDiscoverViews,
            "discoverChannelViews" => $discoverChannelViews
        ]);
    }

    public function users() {

        $users = User::orderBy("id", "DESC")->limit(100)->get();

        return View::make("admin.users.users", [
            "users" => $users
        ]);

    }

}