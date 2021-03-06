<?php

use App\Http\Controllers\JourneysController;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
// Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show')-s>middleware('can:view,profile'); // adding Policy with middleware
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
Route::get('/post/{post}', 'PostController@show');

Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/journeys', 'JourneysController@index')->middleware('testMiddleware');