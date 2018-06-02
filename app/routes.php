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

Route::post('/auth/doRegister', [
    "as" => "auth.doRegister",
    "uses" => "DefaultController@doRegister"
]);

Route::get('/auth/logout', [
    "as" => "auth.logout",
    "uses" => "DefaultController@doLogout"
]);

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

Route::get('/profile/{username}', [
    "as" => "userProfile",
    "uses" => "DefaultController@userProfilePage"
]);

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

Route::get('/contact', [
    "as" => "contact",
    "uses" => "DefaultController@contactPage"
]);