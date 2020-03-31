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


// Route::get('/books','BookController@index');
// Route::get('/books/show/{id}','BookController@show');
// Route::get('/books/create','BookController@create');


Route::get('/login//{email}/{pass}','LoginController@loginByEmail');
Route::get('/login/{username}//{pass}','LoginController@loginByName');








