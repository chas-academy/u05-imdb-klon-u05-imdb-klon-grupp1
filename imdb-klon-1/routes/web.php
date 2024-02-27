<?php
#115
#Added routs for the UserController ->name(updateUsername & updateRole & delete)
#Removed unused Controller-calls
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestWebController;
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


    // Routes for Watchlist
    Route::middleware(['auth'])->group(function () {
        Route::get('/watchlist', [WatchlistController::class, 'index'])->name('watchlist.index');
        Route::post('/watchlist/create', [WatchlistController::class, 'create'])->name('watchlist.create');
        Route::post('/watchlist/add/{movie}', [WatchlistController::class, 'store'])->name('watchlist.storeFromMovie');
        Route::get('/watchlist/show/{id}', [WatchlistController::class, 'show'])->name('watchlist.show');
        Route::get('/watchlist/sort-by-watched', [WatchlistController::class, 'sortMoviesByWatched'])->name('watchlist.sortByWatched');
    });

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

    /**
     * Routes for the User model
     * 
     * ::method /URI, Controller-method = 'name' -> new name 'new.name'
     */
    Route::get('/users', [UserController::class, 'index'])->name('users.index')->withoutMiddleware(['auth']); // ...show all users
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // ...create a new user
    Route::post('/users/{id}', [UserController::class, 'store'])->name('users.store')->withoutMiddleware(['auth']); // ...add new user to all users
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show')->withoutMiddleware(['auth']); // ...show specific user
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit')->withoutMiddleware(['auth']); // ...edit user information
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->withoutMiddleware(['auth']); // ...send 'edit' changes 
    Route::patch('/users/{user}/update-username', [UserController::class, 'updateUsername'])->name('users.updateUsername')->withoutMiddleware(['auth']); // ...change a users username
    Route::patch('/users/{user}/update-role', [UserController::class, 'updateRole'])->name('users.updateRole')->withoutMiddleware(['auth']); // ...change a users role
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->withoutMiddleware(['auth']); // ...delete a specific user

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

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/movies/create', [AdminController::class, 'create'])->name('dashboard.movies.create');
Route::post('/dashboard/movies', [AdminController::class, 'store'])->name('dashboard.movies.store');
Route::get('/dashboard/{movie}/edit', [AdminController::class, 'edit'])->name('dashboard.movies.edit');
Route::put('/dashboard/{movie}', [AdminController::class, 'update'])->name('dashboard.movies.update');
Route::patch('/dashboard/{movie}/updateTitle', [AdminController::class, 'updateTitle'])->name('dashboard.movies.updateTitle');
Route::patch('/dashboard/{movie}/updateDescription', [AdminController::class, 'updateDescription'])->name('dashboard.movies.updateDescription');
Route::patch('/dashboard/{movie}/updateDate', [AdminController::class, 'updateDate'])->name('dashboard.movies.updateDate');
Route::patch('/dashboard/{movie}/updateImg', [AdminController::class, 'updateImg'])->name('dashboard.movies.updateImg');
Route::patch('/dashboard/{movie}/updateTrailer', [AdminController::class, 'updateTrailer'])->name('dashboard.movies.updateTrailer');
Route::patch('/dashboard/{movie}/updateRating', [AdminController::class, 'updateRating'])->name('dashboard.movies.updateRating');
Route::delete('/dashboard/{movie}', [AdminController::class, 'destroy'])->name('dashboard.movies.destroy');
Route::put('/dashboard/{user}', [AdminController::class, 'update'])->name('dashboard.users.update');
Route::patch('/dashboard/{user}/update-username', [AdminController::class, 'updateUsername'])->name('dashboard.users.updateUsername');
Route::patch('/dashboard/{user}/update-role', [AdminController::class, 'updateRole'])->name('dashboard.users.updateRole');
Route::delete('/dashboard/users/{user}', [AdminController::class, 'destroy'])->name('dashboard.users.destroy');


require __DIR__ . '/auth.php';
