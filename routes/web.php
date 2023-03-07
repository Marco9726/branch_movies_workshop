<?php

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


use App\Http\Controllers\PageController as PageController;
use App\Http\Controllers\MovieController\Admin as MovieController;
use App\Http\Controllers\GenreController\Admin as GenreController;
use App\Http\Controllers\Admin\DashboardController as DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('movies', MovieController::class);

Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function () {
	Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
	Route::resource('genres', GenreController::class)->parameters(['genres' => 'genre:slug']);
});

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
