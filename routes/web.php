<?php

use App\Bookmark;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|   This code is to be used later for another view
|   Route::get('/', function()
|   {
|       $tag = Tag1::find(5);
|        return $tag->bookmarks;
|   });
*/
Route::get('/test', function()
{
    $tag = Bookmark::all();
    return $tag;
});



Auth::routes();
Route::get('/', 'HomeController@home');
Route::resource('/bookmarks', 'BookmarksController');
Route::resource('/tags', 'TagsController');
Route::resource('/profiles', 'ProfilesController');
Route::get('/home', 'HomeController@index')->name('home');
