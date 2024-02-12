<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestWebController;
use App\Models\Test;
use App\Http\Controllers\ListController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;

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
Route::get('/tests', [TestWebController::class, 'index']);


// Routes for the lists (display all, show one, edit one, update one and delete one)
Route::get('/lists', [ListController::class, 'index']);
Route::get('/lists/{id}', [ListController::class, 'show']);
Route::get('/lists/{id}/edit', [ListController::class, 'edit']);
Route::put('/lists/{id}', [ListController::class, 'update']);
Route::delete('/lists/{id}', [ListController::class, 'destroy']);

/*made unused routes for later*/
/* Route::get('/tests/create', [TestWebController::class, 'create'])->name('tests.create');
Route::post('/tests', [TestWebController::class, 'store'])->name('tests.store');
Route::get('/tests/{test}', [TestWebController::class, 'show'])->name('tests.show');
Route::get('/tests/{test}/edit', [TestWebController::class, 'edit'])->name('tests.edit');
Route::put('/tests/{test}', [TestWebController::class, 'update'])->name('tests.update');
Route::delete('/tests/{test}', [TestWebController::class, 'destroy'])->name('tests.destroy'); */

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');


//Routes for reviews 
Route::get('/reviews', [ReviewController::class, 'index']);


