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

Auth::routes();

/* Backend Route */
Route::group(['prefix'=>'admin', 'as'=>'admin'], function (){
    Route::group(['namespace'=>'Backend'], function (){
        Route::get('/', 'AdminController@index')->name('.index');
    });


    Route::group(['prefix'=>'blog', 'as'=>'.blog', 'namespace'=>'Blog'], function (){
        Route::get('blog-list','BlogController@index')->name('.bloglist');
        Route::get('new-post', 'BlogController@createShow')->name('.createShow');
        Route::post('newPost', 'BlogController@create')->name('.create');



    });

    Route::group(['prefix'=>'category', 'as'=>'.category', 'namespace'=>'Blog'], function (){
       Route::get('/', 'BlogCategoryController@index')->name('.categorylist');
       Route::get('new-category', 'BlogCategoryController@createShow')->name('.createShow');
       Route::post('newCategory', 'BlogCategoryController@create')->name('.create');
    });


});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

/* Frontend Route */

Route::group(['as'=>'frontend','namespace'=>'Frontend'], function (){
    Route::get('/', 'HomeController@index')->name('.index');
    Route::get('{category?}/{slug}', 'HomeController@post')->name('.blogPost');



});



Route::get('/home', 'HomeController@index')->name('home');
