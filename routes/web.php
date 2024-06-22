<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UniversityController;
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


Route::get('/university/{id}', [UniversityController::class, 'show'])->name('university.show');
// routes/web.php
Route::get('programs/apply/{id}', [ProgramController::class, 'showApplyForm'])->name('programs.apply');
Route::post('programs/apply', [ProgramController::class, 'submitApplication'])->name('programs.submitApplication');

Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
