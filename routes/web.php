<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WallController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;



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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/films', [FilmController::class, 'index'])->middleware(['auth'])->name('films');

Route::get('/film/{id_film}', [FilmController::class, 'show'])->middleware(['auth'])->name('film');

Route::post('/film/{id_film}', [FilmController::class, 'create'])->middleware(['auth'])->name('film_comment');

Route::post('/search', [SearchController::class, 'index'])->middleware(['auth'])->name('search');


//-------------------------------------------------------------------------------------------//
Route::get('/profiles', [ProfileController::class, 'index'])->middleware(['auth'])->name('profiles');

Route::get('/profile/{id_profile}', [ProfileController::class, 'show'])->middleware(['auth'])->name('profile');

Route::get('/profile/UpdateProfile/{id_profile}', [ProfileController::class, 'update'])->middleware(['auth'])->name('profile_update');

Route::get('/DeleteProfile/{id_profile}', [ProfileController::class, 'delete'])->middleware(['auth'])->name('profile_delete');

Route::post('/SaveProfile', [ProfileController::class, 'save'])->middleware(['auth'])->name('profile_save');

//-------------------------------------------------------------------------------------------//




