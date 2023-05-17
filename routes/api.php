<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//public function login()
//{
//    auth('api')->attempt(['email' => 'kien@gmail.com', 'password' => '123456']);
////        return  @auth('api')->user();
//}
//Route::get('loginss', [\App\Http\Controllers\Controller::class, 'login']);
//Route::get('users20-user', [UserController::class, 'index']);

Route::group(["middleware" => ['auth:sanctum']], function () {

});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//
//    return $request->user();
//});

