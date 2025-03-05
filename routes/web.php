<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProuductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'store'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/prouducts/index', [ProuductController::class, 'index'])->name('products.index');
Route::get('/prouducts/create', [ProuductController::class, 'create'])->name('prouducts.create');
Route::post('/prouducts/store', [ProuductController::class, 'store'])->name('prouducts.store');
Route::get('/prouducts/edit/{product:id}', [ProuductController::class, 'store'])->name('prouducts.edit');
Route::put('/prouducts/update', [ProuductController::class, 'update'])->name('prouducts.update');
Route::delete('/prouducts/destroy/{product:id}', [ProuductController::class, 'destroy'])->name('prouducts.destroy');


