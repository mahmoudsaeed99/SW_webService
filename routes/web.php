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

Route::get('/getRegisters','RegisterController@getRegisters');
Route::get('/register/{type}/{username}/{email}/{pass}','RegisterController@register');

Route::get('/login/{username}//{pass}','LoginController@loginByName');

Route::get('/login//{email}/{pass}','LoginController@loginByEmail');


  
