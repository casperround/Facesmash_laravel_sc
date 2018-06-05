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

        $totalSiteUsers = User::all()->count();
        $newest100Users = User::orderBy("id", "DESC")->limit(100)->get();

        return View::make("admin.index", [
            "totalSiteUsers" => $totalSiteUsers,
            "newest100Users" => $newest100Users,
        ]);
    }

}