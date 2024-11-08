<?php

use App\Http\Controllers\BirthdayController;
use App\Models\Birthday;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index', [
        'birthdays' => Birthday::all(),
    ]);
});


Route::controller(BirthdayController::class)->group(function () {
    Route::get('/birthdays', 'index');
    Route::get('/create-birthday', 'create');
    Route::post('/create-birthday', 'store');
    Route::get('/birthday/{birthday}', 'show');
    Route::get('/birthday/{birthday}/edit', 'edit');
    Route::patch('/birthday/{birthday}', 'update');
    Route::delete('/birthday/{birthday}', 'destroy');

});
