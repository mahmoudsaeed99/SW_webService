<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('/getRegisters','RegisterController@getRegisters');
Route::get('/register/{type}/{username}/{email}/{pass}','RegisterController@register');
=======
Route::get('/', function () {
    return view('welcome');
});



Route::get('/login/{username}//{pass}','LoginController@loginByName');

Route::get('/login//{email}/{pass}','LoginController@loginByEmail');


