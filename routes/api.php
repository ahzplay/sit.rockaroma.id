<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistrationController;

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

Route::get('fetch-cities',[RegionController::class, 'fetchCities']);
Route::get('fetch-bands',[RegisterController::class, 'fetchBands']);
Route::get('get-cities/{provinceCode}', [RegionController::class, 'getCities']);
Route::get('email-verification/{codeConfirmation}', [RegistrationController::class, 'emailVerification']);
Route::post('register-checking-profile-form',[RegisterController::class, 'checkingProfileForm']);
Route::post('register-member', [RegistrationController::class, 'doRegister']);
Route::post('login-action', [AuthController::class, 'doLogin']);
Route::get('logout-action', [AuthController::class, 'dologout']);
Route::post('reset-password-action', [AuthController::class, 'resetPassword']);
Route::post('change-password-action', [AuthController::class, 'changePassword']);
