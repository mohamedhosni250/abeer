<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Review;
use Illuminate\Support\Facades\Route;

// Helper function to check active route
if (!function_exists('isActive')) {
    function isActive($route, $output = "active")
    {
        return request()->is($route) ? $output : '';
    }
}

// Home routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search'])->name('search');

// University routes
Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
Route::get('/university/{slug}', [UniversityController::class, 'show'])->name('university.show');
Route::get('/universities/{id}', [UniversityController::class, 'show'])->name('university.show');

// Program application routes
Route::get('programs/apply/{id}', [ApplicationController::class, 'showApplyForm'])->name('programs.apply');
Route::post('programs/apply', [ApplicationController::class, 'submitApplication'])->name('programs.submitApplication');

// Lead routes
Route::get('/leads', [LeadController::class, 'index'])->name('leads');
Route::post('leads/store', [LeadController::class, 'store'])->name('leads.store');

// Blog post routes
Route::get('post/{slug}', [PostController::class, 'show'])->name('post.show');
Route::get('/blog', [PostController::class, 'index'])->name('posts');

//courses 
Route::get('courses', [CourseController::class, 'index'])->name('courses');
// Route that requires authentication
Route::get('course/{slug}', [CourseController::class, 'show'])
    ->middleware('auth')
    ->name('course.show');

// Route to handle redirection if not authenticated
Route::get('register', function () {
    return view('auth.register');
})->name('register');

// Static pages
Route::get('/about', function () {
    $reviews = Review::all();
    return view('pages.about', compact('reviews'));
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__ . '/auth.php';
