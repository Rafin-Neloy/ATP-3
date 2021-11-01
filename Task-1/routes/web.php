<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
Route::get('/Home',[PagesController::class.'Home'])->name('Home');
Route::get('/product',[PagesController::class.'product'])->name('product');
Route::get('/Our teams',[PagesController::class,'Our teams'])->name('Our teams');
Route::get('/about us',[PagesController::class,'about us'])->name('about us');
Route::get('/contact us',[PagesController::class,'contact us'])->name('contact us');