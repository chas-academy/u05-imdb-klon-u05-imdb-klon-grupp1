<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TestWebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WatchlistController;




Route::get('/', function () {return view('welcome');});

// Authenticated Routes
Route::middleware(['auth', \App\Http\Middleware\PageHistoryMiddleware::class])->group(function () {

    // TestController
    Route::get('/tests', [TestWebController::class, 'index']);

    // Routes for Watchlist
    Route::middleware(['auth'])->group(function () {
        Route::get('/watchlist', [WatchlistController::class, 'index'])->name('watchlist.index');
        Route::post('/watchlist/create', [WatchlistController::class, 'create'])->name('watchlist.create');
        Route::post('/watchlist/add/{movie}', [WatchlistController::class, 'store'])->name('watchlist.storeFromMovie');
        Route::get('/watchlist/{user}', [WatchlistController::class, 'show'])->name('watchlist.show');
        Route::get('/watchlist/sort-by-watched', [WatchlistController::class, 'sortMoviesByWatched'])->name('watchlist.sortByWatched');
    });

    // Movies Routes
    Route::get('/movies', [MovieController::class, 'index'])->name('movies.index')->withoutMiddleware(['auth']);
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
    Route::get('/movies/frontpage', [MovieController::class, 'showMoviesOnFrontpage'])->name('movies.frontpage')->withoutMiddleware(['auth']);
    Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show')->withoutMiddleware(['auth']);
    Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');

    // Reviews Routes
    Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index')->withoutMiddleware(['auth']);
    Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create')->withoutMiddleware(['auth']);
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store')->withoutMiddleware(['auth']);
    Route::get('/reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show')->withoutMiddleware(['auth']);
    Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit')->withoutMiddleware(['auth']);
    Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update')->withoutMiddleware(['auth']);
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy')->withoutMiddleware(['auth']);

    // Users Routes
    Route::get('/users', [UserController::class, 'index'])->name('users.index')->withoutMiddleware(['auth']);
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/{id}', [UserController::class, 'store'])->name('users.store')->withoutMiddleware(['auth']);
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show')->withoutMiddleware(['auth']);
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit')->withoutMiddleware(['auth']);
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->withoutMiddleware(['auth']);
    Route::patch('/users/{user}/update-username', [UserController::class, 'updateUsername'])->name('users.updateUsername')->withoutMiddleware(['auth']);
    Route::patch('/users/{user}/update-role', [UserController::class, 'updateRole'])->name('users.updateRole')->withoutMiddleware(['auth']);
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->withoutMiddleware(['auth']);

    // Genre Routes
    
    // Genre Routes
    Route::get('/genres', [GenreController::class, 'genres.index']);
    Route::get('/genres/{id}', [GenreController::class, 'genres.show']);
    Route::get('/genres/{id}/edit', [GenreController::class, 'genres.edit']);
    Route::put('/genres/{id}', [GenreController::class, 'genres.update']);
    Route::delete('/genres/{id}', [GenreController::class, 'genres.destroy']);
    
});

// Flyttade ut `profile` routes från middleware då det returnerade un-authorized 403 trotts att min var inloggad.
// 01/05-2024
// Dennis
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Dashboard Routes
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index')->withoutMiddleware(['auth']);
Route::get('/dashboard/movies/create', [AdminController::class, 'create'])->name('dashboard.movies.create')->withoutMiddleware(['auth']);
Route::post('/dashboard/movies', [AdminController::class, 'store'])->name('dashboard.movies.store')->withoutMiddleware(['auth']);
Route::get('/dashboard/{movie}/edit', [AdminController::class, 'edit'])->name('dashboard.movies.edit')->withoutMiddleware(['auth']);
Route::put('/dashboard/{movie}', [AdminController::class, 'update'])->name('dashboard.movies.update')->withoutMiddleware(['auth']);
Route::patch('/dashboard/{movie}/updateTitle', [AdminController::class, 'updateTitle'])->name('dashboard.movies.updateTitle')->withoutMiddleware(['auth']);
Route::patch('/dashboard/{movie}/updateDescription', [AdminController::class, 'updateDescription'])->name('dashboard.movies.updateDescription')->withoutMiddleware(['auth']);
Route::patch('/dashboard/{movie}/updateDate', [AdminController::class, 'updateDate'])->name('dashboard.movies.updateDate')->withoutMiddleware(['auth']);
Route::patch('/dashboard/{movie}/updateImg', [AdminController::class, 'updateImg'])->name('dashboard.movies.updateImg')->withoutMiddleware(['auth']);
Route::patch('/dashboard/{movie}/updateTrailer', [AdminController::class, 'updateTrailer'])->name('dashboard.movies.updateTrailer')->withoutMiddleware(['auth']);
Route::patch('/dashboard/{movie}/updateRating', [AdminController::class, 'updateRating'])->name('dashboard.movies.updateRating')->withoutMiddleware(['auth']);
Route::delete('/dashboard/{movie}', [AdminController::class, 'destroy'])->name('dashboard.movies.destroy')->withoutMiddleware(['auth']);
Route::put('/dashboard/{user}', [AdminController::class, 'update'])->name('dashboard.users.update')->withoutMiddleware(['auth']);
Route::patch('/dashboard/{movie}/updateGenre', [AdminController::class, 'updateGenre'])->name('dashboard.movies.updateGenre')->withoutMiddleware(['auth']);
Route::patch('/dashboard/{user}/update-username', [AdminController::class, 'updateUsername'])->name('dashboard.users.updateUsername')->withoutMiddleware(['auth']);
Route::patch('/dashboard/{user}/update-role', [AdminController::class, 'updateRole'])->name('dashboard.users.updateRole')->withoutMiddleware(['auth']);
Route::delete('/dashboard/users/{user}', [AdminController::class, 'destroy'])->name('dashboard.users.destroy')->withoutMiddleware(['auth']);

    Route::get('/navigate/back', function () {
        $history = session('page_history', []);

        if (count($history) > 1) {
            array_pop($history); // Remove the current page
            $previousPage = array_pop($history);
            session(['page_history' => $history]);

            return redirect($previousPage);
        }

        // If there is no or only one page in the history, redirect to the home page
        return redirect('/');
    })->name('navigate.back')->withoutMiddleware(['auth']);

// Auth Routes
require __DIR__ . '/auth.php';
