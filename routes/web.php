<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', [HomeController::class,'main']);
Route::post('/create', [PostController::class,'create'])->name('create.post')->middleware('auth');
Route::get('/profile/{user}', [HomeController::class,'profile'])->name('show.profile.user')->middleware('auth');
Route::post('/editprofile/{user}', [HomeController::class,'editprofile'])->name('edit.profile.user')->middleware('auth');
