<?php

use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerpost'])->name('register');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginpost'])->name('login');

Route::get('/home',[ShoeController::class,'index'])->name('home');

Route::get('/create',[ShoeController::class,'shoes'])->name('create');
Route::post('/create',[ShoeController::class,'insertshoes'])->name('create');

Route::get('/dashboard',[ShoeController::class,'mainindex'])->name('dashboard');

Route::get('/edit{id}',[ShoeController::class,'edit'])->name('edit');
Route::put('/edit{id}',[ShoeController::class,'update'])->name('edit');

Route::get('/show{id}',[ShoeController::class,'show'])->name('show');

Route::delete('/deleteproduct', [ShoeController::class, 'deleteProduct'])->name('deleteProduct');
Route::delete('/destroy{id}',[ShoeController::class,'destroy'])->name('destroy');

