<?php

Route::get('/', [
    "as" => "index",
    "uses" => "DefaultController@index"
]);

Route::post('/auth/doLogin', [
    "as" => "auth.doLogin",
    "uses" => "DefaultController@doLogin"
]);

Route::get('/register', [
    "as" => "register",
    "uses" => "DefaultController@register"
]);
//==============================================
//Auth Page Routes
//==============================================
Route::post('/auth/doRegister', [
    "as" => "auth.doRegister",
    "uses" => "DefaultController@doRegister"
]);

Route::get('/auth/logout', [
    "as" => "auth.logout",
    "uses" => "DefaultController@doLogout"
]);

//==============================================
//Home Page Routes
//==============================================
Route::get('/home', [
    "as" => "home",
    "uses" => "DefaultController@homePage"
]);

Route::post('/home/createNewPost', [
    "as" => "home.createNewPost",
    "uses" => "DefaultController@homePageFormPost"
]);

//==============================================
//User Profile Page Routes
//==============================================
Route::get('/profile/{username}', [
    "as" => "userProfile",
    "uses" => "DefaultController@userProfilePage"
]);

//==============================================
//My profile Page Routes
//==============================================
Route::get('/account/myProfile', [
    "as" => "account.myProfile",
    "uses" => "DefaultController@editMyProfilePage"
]);

Route::post('/account/myProfile/doEdit', [
    "as" => "account.myProfile.doEdit",
    "uses" => "DefaultController@doEditMyProfile"
]);

//==============================================
//Contact Page Routes
//==============================================
Route::get('/contact', [
    "as" => "contact",
    "uses" => "DefaultController@contactPage"
]);
//==============================================
//Discover Page Routes
//==============================================


Route::get('/discover', [
    "as" => "discover",
    "uses" => "DefaultController@discoverPage"
]);

Route::get('/discover/channel', [
    "as" => "discover.channel",
    "uses" => "DefaultController@discoverChannelPage"
]);
Route::get('/discover/gif', [
    "as" => "discover.gif",
    "uses" => "DefaultController@discoverGifPage"
]);
Route::get('/discover/group', [
    "as" => "discover.group",
    "uses" => "DefaultController@discoverGroupPage"
]);
Route::get('/discover/page', [
    "as" => "discover.page",
    "uses" => "DefaultController@discoverPagesPage"
]);
Route::get('/discover/photo', [
    "as" => "discover.photo",
    "uses" => "DefaultController@discoverPhotoPage"
]);
Route::get('/discover/video', [
    "as" => "discover.video",
    "uses" => "DefaultController@discoverVideoPage"
]);
//==============================================
//User Pages,Groups,Events,Channels Routes
//==============================================


Route::get('/pages', [
    "as" => "pages.userpage",
    "uses" => "DefaultController@userPagesPage"
]);
Route::get('/pages/{unique_pagename}', [
    "as" => "userPage",
    "uses" => "DefaultController@userPage"
]);
Route::post('/pages/userPagesNewPage', [
    "as" => "pages.userPagesNewPage",
    "uses" => "DefaultController@userPagesNewPage"
]);

Route::get('/groups', [
    "as" => "groups.usergroup",
    "uses" => "DefaultController@userGroupsPage"
]);
Route::get('/events', [
    "as" => "events.userevent",
    "uses" => "DefaultController@userEventsPage"
]);
Route::get('/channels', [
    "as" => "channels.userchannel",
    "uses" => "DefaultController@userChannelsPage"
]);
