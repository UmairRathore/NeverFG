<?php

use App\Http\Controllers\Authentication\AuthController;
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

Route::get('/',[\App\Http\Controllers\Authentication\RegistrationController::class,'memorialregistration']);




Route::get('/signup',[AuthController::class]);
Route::post('/signup',[AuthController::class]);
Route::get('/login',[AuthController::class]);
Route::post('/login',[AuthController::class]);
Route::get('/forgot-password',[AuthController::class]);
Route::post('/forgot-password',[AuthController::class]);
