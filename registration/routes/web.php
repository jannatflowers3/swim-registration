<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\BackendRegisterController;
use App\Http\Controllers\FromController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Frontend  start
Route::get('/', [FrontendController::class, 'frontpage']);
Route::get('/registration', [FrontendController::class, 'registration']);
Route::post('/student-registration', [FrontendController::class, 'stregistration'])->name('stregistration.update');
// Route::get('/dashboard', [BackendController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Backend  start
Route::get('/dashboard', [BackendRegisterController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/registrationbackend', [BackendRegisterController::class, 'registrationbackend']);
require __DIR__.'/auth.php';
