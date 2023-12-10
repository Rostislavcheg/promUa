<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, "index"])->name("index");
Route::post('/auth', [AuthController::class, 'auth'])->name("auth");
// change to working links
Route::get('/likes', [PageController::class, 'index'])->name('likes');
Route::get('/cart', [PageController::class, 'index'])->name('cart');
