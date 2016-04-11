<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

<<<<<<< HEAD
Route::match(['get', 'post'], '/', function () {
    return view('index');
});
=======
Route::group(['middleware' => ['web']], function () {
>>>>>>> parent of 0c09cbe... add the content of articles!

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}','BlogController@showPost');

<<<<<<< HEAD
Route::get('/about', 'AboutController@index');



/* ADMIN */

Route::get('admin',function(){
    return redirect('/admin/post');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'],function(){

    Route::resource('admin/post', 'PostController');
    Route::resource('admin/tag', 'TagController');
    Route::get('admin/upload', 'UploadController@index');

});

Route::get('auth/login','Auth\AuthContoller@getLogin');
Route::post('auth/login','Auth\AuthContoller@postLogin');
Route::get('auth/logout','Auth\AuthContoller@getLogout');
=======
        return view('index');
    });


});
>>>>>>> parent of 0c09cbe... add the content of articles!
