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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/about', function () {
    return "Hi about page";
});
Route::get('/contacts', function () {
    return "Contacts page";
});
Route::get('/post/{id}', function ($id) {
    return "this is post number".$id;
});
Route::get('admin/posts/examples',array('as'=> 'admin.home',function () {
    $url = route('admin.home');
//
    
    return "this is admin ". $url;
}));*/

//Route::get('/post','PostsController@index');
Route::resource('/post', 'PostsController');

/*
 --------------------------
 * Application Routes
 --------------------------
 */
Route::group(['middleware' => ['web']],function (){});

