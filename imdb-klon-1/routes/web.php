<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestWebController;
use App\Models\Test;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\AdminController;

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

Route::middleware('auth')->group(function () {

    // TestController
    Route::get('/tests', [TestWebController::class, 'index']);


    // Routes for the lists (display all, show one, edit one, update one and delete one)
    Route::get('/lists', [WatchlistController::class, 'index']);
    Route::get('/lists/{id}', [WatchlistController::class, 'show']);
    Route::get('/lists/{id}/edit', [WatchlistController::class, 'edit']);
    Route::put('/lists/{id}', [WatchlistController::class, 'update']);
    Route::delete('/lists/{id}', [WatchlistController::class, 'destroy']);

    /*made unused routes for later*/
    /* Route::get('/tests/create', [TestWebController::class, 'create'])->name('tests.create');
Route::post('/tests', [TestWebController::class, 'store'])->name('tests.store');
Route::get('/tests/{test}', [TestWebController::class, 'show'])->name('tests.show');
Route::get('/tests/{test}/edit', [TestWebController::class, 'edit'])->name('tests.edit');
Route::put('/tests/{test}', [TestWebController::class, 'update'])->name('tests.update');
Route::delete('/tests/{test}', [TestWebController::class, 'destroy'])->name('tests.destroy'); */

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index')->withoutMiddleware(['auth']);
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show')->withoutMiddleware(['auth']);
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');


//Routes for reviews 
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index')->withoutMiddleware(['auth']);
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

// Routes for handeling users
Route::get('/users', [UserController::class, 'index'])->name('users.index')->withoutMiddleware(['auth']); // ...show all users
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // ...create a new user
Route::post('/users/{id}', [UserController::class, 'store'])->name('users.store'); // ...add new user to all users
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show'); // ...show specific user
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit'); // ...edit user information
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update'); // ...send 'edit' changes 
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.index'); // ...delete a specific user


// Routes for handeling Genre
Route::get('/genres', [GenreController::class, 'genres.index']);
Route::get('/genres/{id}', [GenreController::class, 'genres.show']);
Route::get('/genres/{id}/edit', [GenreController::class, 'genres.edit']);
Route::put('/genres/{id}', [GenreController::class, 'genres.update']);
Route::delete('/genres/{id}', [GenreController::class, 'genres.destroy']);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

require __DIR__ . '/auth.php';
