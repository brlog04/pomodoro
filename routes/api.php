<?php

use App\Http\Controllers\PomodoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/close-finished-pomodoros', [PomodoreController::class, 'closeFinishedPomodoros']);

