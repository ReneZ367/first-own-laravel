<?php

use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::controller(BirthdayController::class)->group(function () {
        Route::get('/birthdays', 'index');
        Route::get('/create-birthday', 'create');
        Route::post('/create-birthday', 'store');
        Route::get('/birthday/{birthday}', 'show');
        Route::get('/birthday/{birthday}/edit', 'edit');
        Route::patch('/birthday/{birthday}', 'update');
        Route::delete('/birthday/{birthday}', 'destroy');
    });
});


Route::get('/register', [RegisterUserController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterUserController::class, 'store'])->middleware('guest');
Route::get('/login', [SessionController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/friends', [FriendController::class, 'index'])->middleware('auth');
Route::get('/create-friend', [FriendController::class, 'create'])->middleware('auth');
Route::post('/create-friend', [FriendController::class, 'store'])->middleware('auth');
Route::patch('/accept-friend/{id}', [FriendController::class, 'acceptFriend'])->middleware('auth');
Route::delete('/deny-friend/{id}', [FriendController::class, 'deny'])->middleware('auth');
Route::delete('/delete-friend/{id}', [FriendController::class, 'destroy'])->middleware('auth');
