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
    "as" => "discoverChannel",
    "uses" => "DefaultController@discoverChannelPage"
]);
Route::get('/discover/gif', [
    "as" => "discoverGif",
    "uses" => "DefaultController@discoverGifPage"
]);
Route::get('/discover/group', [
    "as" => "discoverGroup",
    "uses" => "DefaultController@discoverGroupPage"
]);
Route::get('/discover/page', [
    "as" => "discoverPage",
    "uses" => "DefaultController@discoverPagePage"
]);
Route::get('/discover/photo', [
    "as" => "discoverPhoto",
    "uses" => "DefaultController@discoverPhotoPage"
]);
Route::get('/discover/video', [
    "as" => "discoverVideo",
    "uses" => "DefaultController@discoverVideoPage"
]);