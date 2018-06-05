<?php
/**
 * Created by PhpStorm.
 * User: roddy
 * Date: 02/06/2018
 * Time: 14:45
 */

class Channels extends Eloquent
{

    protected $table = 'channels';

    protected $fillable = ["id", "uid", "unique_channelname", "owner_id", "category", "about", "website", "twitter", "facebook", "youtube", "discord_invite", "banner_path", "page_img_path","post_date","post_time","visibility"];

    public $timestamps = false;

}