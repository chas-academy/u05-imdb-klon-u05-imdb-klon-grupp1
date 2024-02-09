<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestWebController;
use App\Models\Test;
use App\Http\Controllers\ListController;

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