<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', 'App\Http\Controllers\AuthController@login');

Route::get('upload-gdrive', 'App\Http\Controllers\GDriveApiController@index');
Route::get('callback', 'App\Http\Controllers\GDriveApiController@callback');
Route::post('upload-gdrive-action', function (Request $request) {
        dd($request->file('thing')->store('','google'));
    //dd($request->file('thing')->filename);
    //dd(Storage::disk('google')->url('1ZalRfEHEQtFQBGl4QrdVd3oWdPQ65t7N/' . $request->file('thing')));
});

Route::get('delete-gdrive-action', function () {
    dd(Storage::disk('google')->delete('1ZalRfEHEQtFQBGl4QrdVd3oWdPQ65t7N/1icRvP5kST9PN8jQOcpuoOyR3qvRnrQGE8HaKIbd'));
});

Route::get('enter-page', 'App\Http\Controllers\AuthController@login');

Route::post('login-action', 'App\Http\Controllers\AuthController@loginAction');
Route::group(['middleware' => 'App\Http\Middleware\LoginChecking'], function(){
    Route::get('landing-page', 'App\Http\Controllers\LandingPageController@index');
    Route::get('register-profile-page', 'App\Http\Controllers\RegisterController@index');
    //Route::get('register-file-page', 'App\Http\Controllers\RegisterController@registerFile');
    Route::post('register-save-demo', 'App\Http\Controllers\RegisterController@saveDemo');

    Route::get('logout-action', 'App\Http\Controllers\AuthController@logoutAction');
});

