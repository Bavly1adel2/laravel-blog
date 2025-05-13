<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Profile Routes (only for authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/category/{slug}', [HomeController::class, 'show'])->name('category.show');
Route::get('/postsdetails/{id}', [HomeController::class, 'postsdetails'])->name('postsdetails');

// Dashboard (only for authenticated + verified users)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Admin Routes
Route::get('/test', [LoginController::class, 'test'])
    ->middleware(['auth', 'admin'])
    ->name('test');

// Custom Login Index Route
Route::get('/index', [LoginController::class, 'index'])->name('index');

// Auth Routes (Login/Register/etc.)
require __DIR__ . '/auth.php';
