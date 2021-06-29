<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WallController;
use App\Http\Controllers\FilmController;


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

Route::get('/forum', function () {
    return view('forum');
})->middleware(['auth'])->name('forum');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');







require __DIR__.'/auth.php';



//-------------------------------------------------------------------------------------------//




Route::get('/films', [FilmController::class, 'index'])->middleware(['auth'])->name('films');

Route::get('/film/{id_film}', [FilmController::class, 'show'])->middleware(['auth'])->name('film');

//-------------------------------------------------------------------------------------------//

Route::get('/wall', [WallController::class, 'index'])->middleware(['auth'])->name('wall');

Route::post('/wall', [WallController::class, 'create'])->middleware(['auth'])->name('post_create');

Route::get('/UpdatePost/{id_post}', [WallController::class, 'update'])->middleware(['auth'])->name('post_update');

Route::get('/DeletePost/{id_post}', [WallController::class, 'delete'])->middleware(['auth'])->name('post_delete');

Route::post('/SavePost', [WallController::class, 'save'])->middleware(['auth'])->name('post_save');


Route::get('/plop/{param?}', function ($param = null) {
    echo  'plop = ' .$param;
})->middleware(['auth'])->name('plop');



