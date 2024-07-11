<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UniversityController;
use App\Models\University;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
Route::get('university/{slug}', [UniversityController::class, 'show'])->name('university.show');
// routes/web.php
Route::get('programs/apply/{id}', [ProgramController::class, 'showApplyForm'])->name('programs.apply');
Route::post('programs/apply', [ProgramController::class, 'submitApplication'])->name('programs.submitApplication');
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
