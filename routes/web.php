<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('enter-page', 'App\Http\Controllers\AuthController@login');
Route::post('login-action', 'App\Http\Controllers\AuthController@loginAction');
Route::group(['middleware' => 'App\Http\Middleware\LoginChecking'], function(){
    Route::get('landing-page', 'App\Http\Controllers\LandingPageController@index');
    Route::get('logout-action', 'App\Http\Controllers\AuthController@logoutAction');
});

