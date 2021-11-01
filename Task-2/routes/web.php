<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UsersController;

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
Route::post("/login",[UsersController::class,'login']);
Route::view("login","login");
Route::post("/registration",[UsersController::class,'registration']);
Route::view("registration","registration");
Route::get("/contact",[UsersController::class,'Contact']);
Route::view("/contact","Contact");


