<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\User;
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


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return hybridly('welcome', [
            'user' => \App\Data\UserData::from(User::find(1)),
        ]);
    })->name('index');
});

Route::get('/info', \App\Http\Controllers\InfoController::class)->name('info');

Route::get('/todo/create', [\App\Http\Controllers\TodoController::class, 'create'])->name('todo.create');
Route::post('/todo', [\App\Http\Controllers\TodoController::class, 'store'])->name('todo.store');

/* AUTH */

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'create'])->name('login.attempt');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});




