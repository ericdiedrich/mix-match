<?php

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
Route::get('/', 'PagesController@index');
Route::get('/register', 'PagesController@register');
Route::get('/login', 'PagesController@login');
Route::get('/services', 'PagesController@services');
Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/posts/{post}', 'PagesController@posts');

// Route::get('/', function () {
//     return view('index');
//     // return "<h1>Welcome to my first laravel page</h1>";
// });

// Route::get('/register/{user}/{colour}', function ($user, $colour) {
//     return view('welcome');
//     return "<h1>Welcome to my first laravel page</h1>";
//     return "<input type='text' >Name: " . $user . " " . $colour;
// });
