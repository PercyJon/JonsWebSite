<?php

// Blog pages
Route::get('/', function () {
    return view('index');
});
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');


/*Route::get('admin', function () {
    return redirect('/admin/post');
});
Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::resource('admin/post', 'PostController@index');
    Route::resource('admin/tag', 'TagController');
    Route::get('admin/upload', 'UploadController');
});

Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
