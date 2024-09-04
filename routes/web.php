<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PomodoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/statuses', StatusController::class);
    Route::resource('/clients', ClientController::class);
    Route::resource('/projects', ProjectController::class);

    Route::resource('tasks', TaskController::class);
    Route::resource('pomodoros', PomodoreController::class);
    Route::resource('userProfiles', UserProfileController::class);
    Route::resource('users', UserController::class);
});

require __DIR__ . '/auth.php';




/*Route::get('pomodoro-test', function(){
    return view('testpomodoro');
});*/

Route::get('product', [ProductController::class, 'index']);
