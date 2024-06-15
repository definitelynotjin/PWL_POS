<?php

use App\Http\Controllers\Api\LevelsController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\UserController;
use App\Models\User;
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


Route::post('/register', RegisterController::class)->name('register');
Route::post('/login', LoginController::class)->name('login');
Route::post('/logout', LoginController::class)->name('logout');


route::get('levels', [LevelsController::class, 'index']);
route::post('levels', [LevelsController::class, 'store']);
route::get('levels/{level}', [LevelsController::class, 'show']);
route::put('levels/{level}', [LevelsController::class, 'update']);
route::delete('levels/{level}', [LevelsController::class, 'destroy']);

route::get('user', [UserController::class, 'index']);
route::post('user', [UserController::class, 'store']);
route::get('user/{user}', [UserController::class, 'show']);
route::put('user/{user}', [UserController::class, 'update']);
route::delete('user/{user}', [UserController::class, 'destroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
