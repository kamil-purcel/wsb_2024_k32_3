<?php

use App\Http\Controllers\OgolneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BookController;

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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware('auth')->middleware(['role:admin'])->group(function () {
    Route::resource('users', UserController::class);
    Route::get('users/{user}/change-password', [UserController::class, 'changePasswordForm'])->name('users.change-password-form');
    Route::post('users/{user}/change-password', [UserController::class, 'changePassword'])->name('users.change-password');
});

Route::get('/', [OgolneController::class, 'start'])->name('start');

Route::get('/dashboard', function () {
    return redirect()->route('start');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->middleware(['role:librarian,admin'])->group(function () {
    Route::resource('books', BookController::class);
    Route::post('books/{book}/returnCopy', [BookController::class, 'returnCopy'])->name('books.returnCopy');
    Route::post('books/{book}/rentCopy', [BookController::class, 'rentCopy'])->name('books.rentCopy');
});

Route::middleware('auth')->middleware(['role:user,librarian,admin'])->group(function () {
    Route::resource('books', BookController::class)->only(['index', 'show']);
});

require __DIR__ . '/auth.php';
