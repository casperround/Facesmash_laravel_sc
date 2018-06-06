<?php
/**
 * Created by PhpStorm.
 * User: roddy
 * Date: 06/06/2018
 * Time: 22:44
 */

class UserContentViews extends Eloquent
{

    protected $table = 'user_content_views';

    protected $fillable = ["id", "time", "date", "content_type", "content_id", "authed_user"];

    public $timestamps = false;

}