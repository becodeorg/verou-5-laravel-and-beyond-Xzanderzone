<?php

use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\ProfileController;
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
})->name('home');
Route::get('/mice', [MouseController::class, 'index'])->name('showMice');
Route::get('/mice/{mouse}', [MouseController::class, 'show'])->name('showMouse');
Route::get('/mice/sort/{type}', [MouseController::class, 'showMouseSorted'])->name('showMouseSorted');

Route::get('/keyboards', [KeyboardController::class, 'index'])->name('showKeyboards');
Route::get('/keyboards/{keyboard}', [KeyboardController::class, 'show'])->name('showKeyboard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
