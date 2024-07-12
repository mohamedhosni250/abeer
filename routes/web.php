<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route to display the application form (GET)
Route::get('programs/apply/{id}', [ApplicationController::class, 'showApplyForm'])->name('programs.apply');

// Route to handle the form submission (POST)
Route::post('programs/apply', [ApplicationController::class, 'submitApplication'])->name('programs.submitApplication');

// Other routes...
Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
Route::get('/university/{slug}', [UniversityController::class, 'show'])->name('university.show');
Route::get('/universities/{id}', [UniversityController::class, 'show'])->name('university.show');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
