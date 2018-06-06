<?php
/**
 * Created by PhpStorm.
 * User: roddy
 * Date: 06/06/2018
 * Time: 16:07
 */

class OpenDiscoverViews extends Eloquent
{

    protected $table = 'open_discover_views';

    protected $fillable = ["id", "time", "date", "ip", "discover_page"];

    public $timestamps = false;

}