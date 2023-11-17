<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\UserController;

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


Route::post('weather',[WeatherController::class, 'index'])->name('weather');
Route::post('signUp',[UserController::class, 'signUp'])->name('signUp');
Route::post('signIn',[UserController::class,'login'])->name('signIn');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
