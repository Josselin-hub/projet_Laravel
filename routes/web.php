<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WallController;
use App\Http\Controllers\FilmControll;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserprofileController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/films', [FilmController::class, 'index'])->middleware(['auth'])->name('films');

Route::get('/film/{id_film}', [FilmController::class, 'show'])->middleware(['auth'])->name('film');

Route::get('/profile/{id_profile}', [UserprofileController::class, 'index'])->middleware(['auth'])->name('profile');


Route::get('/profile', [UserprofileController::class, 'update'])->middleware(['auth'])->name('profile_update');

//-------------------------------------------------------------------------------------------//

Route::get('/wall', [WallController::class, 'index'])->middleware(['auth'])->name('wall');

Route::post('/wall', [WallController::class, 'create'])->middleware(['auth'])->name('post_create');

Route::get('/UpdatePost/{id_post}', [WallController::class, 'update'])->middleware(['auth'])->name('post_update');

Route::get('/DeletePost/{id_post}', [WallController::class, 'delete'])->middleware(['auth'])->name('post_delete');

Route::post('/SavePost', [WallController::class, 'save'])->middleware(['auth'])->name('post_save');




