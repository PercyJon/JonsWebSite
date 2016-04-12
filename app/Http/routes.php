<?php

Route::get('/', function () {
    return view('index');
});
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');


Route::get('admin', function () {
    return redirect('/home');
});

Route::group(['namespace' => 'Admin'], function () {
    Route::get('admin/post', 'PostController@index');
    Route::get('admin/tag', 'TagController@index');
    Route::get('admin/upload', 'UploadController@index');
});

Route::group(['middleware' => 'web'],function(){
    Route::auth();
    Route::get('/auth/login', 'Auth\AuthController@getLogin');
    Route::post('/auth/login', 'Auth\AuthController@postLogin');
    Route::get('/auth/logout', 'Auth\AuthController@getLogout');
    Route::get('/home', 'HomeController@index');
});

