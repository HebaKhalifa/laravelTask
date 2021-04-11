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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('user Data', function () {
//     return view('profile');
// });


// Route::get('blog/{id}/{name}/{mail}/{title}', 'blog@startBlog');




Route::get('createAccount', 'userController@create');

Route::post('profile', 'userController@submit');