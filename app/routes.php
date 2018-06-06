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
//Discover Routes
//==============================================
Route::get('/discover', [
    "as" => "discover",
    "uses" => "DefaultController@discoverPage"
]);
//==============================================
//Discover Channel Routes
//==============================================
Route::get('/discover/channel', [
    "as" => "discover.channel",
    "uses" => "DefaultController@discoverChannelPage"
]);
//==============================================
//Discover Gif Routes
//==============================================
Route::get('/discover/gif', [
    "as" => "discover.gif",
    "uses" => "DefaultController@discoverGifPage"
]);
//==============================================
//Discover Group Routes
//==============================================
Route::get('/discover/group', [
    "as" => "discover.group",
    "uses" => "DefaultController@discoverGroupPage"
]);
//==============================================
//Discover Page Routes
//==============================================
Route::get('/discover/page', [
    "as" => "discover.page",
    "uses" => "DefaultController@discoverPagesPage"
]);
//==============================================
//Discover Photo Routes
//==============================================
Route::get('/discover/photo', [
    "as" => "discover.photo",
    "uses" => "DefaultController@discoverPhotoPage"
]);
//==============================================
//Discover Video Routes
//==============================================
Route::get('/discover/video', [
    "as" => "discover.video",
    "uses" => "DefaultController@discoverVideoPage"
]);
//==============================================
// Pages Routes
//==============================================


Route::get('/pages', [
    "as" => "pages.userpage",
    "uses" => "DefaultController@userPagesPage"
]);
Route::get('/pages/{unique_pagename}', [
    "as" => "pagesview",
    "uses" => "DefaultController@pagesviewPage"
]);
Route::post('/pages/userPagesNewPage', [
    "as" => "pages.userPagesNewPage",
    "uses" => "DefaultController@userPagesNewPage"
]);
Route::post('/pages/createNewPost', [
    "as" => "pages.createNewPost",
    "uses" => "DefaultController@pagesPageFormPost"
]);
//==============================================
// Groups Routes
//==============================================
Route::get('/groups', [
    "as" => "groups.usergroup",
    "uses" => "DefaultController@userGroupsPage"
]);
Route::get('/groups/{unique_groupname}', [
    "as" => "groupsview",
    "uses" => "DefaultController@groupsviewPage"
]);
Route::post('/groups/userGroupsNewPage', [
    "as" => "groups.userGroupsNewPage",
    "uses" => "DefaultController@userGroupsNewPage"
]);
//==============================================
// Events Routes
//==============================================
Route::get('/events', [
    "as" => "events.userevent",
    "uses" => "DefaultController@userEventsPage"
]);
Route::get('/events/{unique_eventname}', [
    "as" => "eventsview",
    "uses" => "DefaultController@eventsviewPage"
]);
Route::post('/events/userEventsNewPage', [
    "as" => "events.userEventsNewPage",
    "uses" => "DefaultController@userEventsNewPage"
]);
//==============================================
// channels Routes
//==============================================
Route::get('/channels', [
    "as" => "channels.userchannel",
    "uses" => "DefaultController@userChannelsPage"
]);
Route::get('/channels/{unique_channelname}', [
    "as" => "channelsview",
    "uses" => "DefaultController@channelsviewPage"
]);
Route::post('/channels/userChannelsNewPage', [
    "as" => "channels.userChannelsNewPage",
    "uses" => "DefaultController@userChannelsNewPage"
]);
Route::post('/channels/createNewPost', [
    "as" => "channels.createNewPost",
    "uses" => "DefaultController@channelsPageFormPost"
]);
//==============================================
// Pictures Routes
//==============================================
Route::get('/pictures', [
    "as" => "pictures.userpicture",
    "uses" => "DefaultController@userPicturesPage"
]);
Route::get('/pictures/{unique_picturename}', [
    "as" => "picturesview",
    "uses" => "DefaultController@picturesviewPage"
]);
Route::post('/pictures/userPicturesNewPage', [
    "as" => "pictures.userPicturesNewPage",
    "uses" => "DefaultController@userPicturesNewPage"
]);
//==============================================
// Videos Routes
//==============================================
Route::get('/videos', [
    "as" => "videos.uservideo",
    "uses" => "DefaultController@userVideosPage"
]);
Route::get('/videos/{unique_videoname}', [
    "as" => "videosview",
    "uses" => "DefaultController@videosviewPage"
]);
Route::post('/videos/userVideosNewPage', [
    "as" => "videos.userVideosNewPage",
    "uses" => "DefaultController@userVideosNewPage"
]);
//==============================================
// Admin Routes
//==============================================
Route::get('/admin', [
    "as" => "admin.index",
    "uses" => "AdminController@index"
]);