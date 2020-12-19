<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('index');


Route::get('/login', 'AuthController@getLogin')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->name('login')->middleware('guest');



Route::post('/logout', 'AuthController@logout')->name('logout')->middleware('auth');
Route::get('/logout', 'AuthController@logout')->name('logout')->middleware('auth');

Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('auth')->group(function(){
    Route::resource('product','ProductController');
    Route::resource('brand','BrandController');
    Route::resource('country','CountryController');
    Route::resource('category','CategoryController');
    Route::resource('news','NewsController');
    Route::resource('users','UsersController');
    Route::resource('setting','SetController');
    Route::resource('search','SearchController');
    Route::get('deletefile/{id}','ProductfileController@destroy');
    Route::get('deletedatashid/{id}','DeldatashidController@destroy');
    Route::get('deletemanual/{id}','DelmanualController@destroy');
    Route::get('deletecertificate/{id}','DelcertificateController@destroy');




//    Route::group(['prefix' => 'setting'], function () {
//        Route::get('/', 'SettingController@getSetting')->name('setting');
//        Route::get('/edit/{id}', 'SettingController@editSetting')->name('setting-edit');
//        Route::post('/edit/{id}', 'SettingController@updateSetting')->name('setting-edit-setting');
//    });
});

Route::get('/search','SearchController@search');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', 'DashboardController@getIndex')->name('dashboard');
    Route::post('profile', 'MediaController@getprofile')->name('profile');




    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'DashboardController@getUsers')->name('users');
        Route::post('/add', 'DashboardController@createUser')->name('user-create');
        Route::get('/edit/{id}', 'DashboardController@editUser')->name('user-edit');
        Route::post('/edit/{id}', 'DashboardController@updateUser')->name('user-edit-post');
        Route::get('/delete/{id}', 'DashboardController@deleteUser')->name('user-delete');
        Route::post('/delete/{id}', 'DashboardController@removeUser')->name('user-delete-post');



    });




    Route::group(['prefix' => 'pages'], function () {
        Route::get('/', 'PageController@getPages')->name('pages');// index
        Route::get('/add', 'PageController@getCreatePage')->name('page-create'); //create
        Route::post('/add', 'PageController@createPage')->name('page-create-post'); //Store
        Route::get('/edit/{id}', 'PageController@editPage')->name('page-edit');//Edit
        Route::post('/edit/{id}', 'PageController@updatePage')->name('page-edit-post');//Update
        Route::get('/delete/{id}', 'PageController@deletePage')->name('page-delete');// NADARIM!!!
        Route::post('/delete/{id}', 'PageController@removePage')->name('page-delete-post');//destory
     });

     Route::group(['prefix' => 'posts'], function () {
        Route::get('/', 'PostController@getPosts')->name('posts');
        Route::get('/add', 'PostController@getCreatePost')->name('post-create');
        Route::post('/add', 'PostController@createPost')->name('post-create-post');
        Route::get('/edit/{id}', 'PostController@editPost')->name('post-edit');
        Route::post('/edit/{id}', 'PostController@updatePost')->name('post-edit-post');
        Route::get('/delete/{id}', 'PostController@deletePost')->name('post-delete');
        Route::post('/delete/{id}', 'PostController@removePost')->name('post-delete-post');
     });









});

Route::resource('news', 'BlogController');
Route::get('category/{id}', 'CategoryfrontController@index');

//Route::get('/news', 'BlogController');
//Route::group(['prefix' => 'news'], function () {
//});


//product route
Route::group(['prefix' => 'products'], function () {
    Route::get('{id?}', 'ProductController@show');
});

Route::get('/{pageSlug}','FrontendController@showPage')->name('show-page');
Route::get('/{postlug}','FrontendController@showPost')->name('show-post');

Route::get('/test' , function (){
   return auth()->loginUsingId(
       1
   ) ;
});
