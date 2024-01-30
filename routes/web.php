<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\KeyboardController;

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
Route::get('/mice', [MouseController::class, 'index'])->name('showMice');
Route::get('/mice/{mouse}', [MouseController::class, 'show'])->name('showMouse');

Route::get('/keyboards', [KeyboardController::class, 'index'])->name('showKeyboards');
Route::get('/keyboards/{keyboard}', [KeyboardController::class, 'show'])->name('showKeyboard');
