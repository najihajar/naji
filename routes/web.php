<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AbsenceRequestController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/', [AccueilController::class, 'accueil'])->name('app_accueil');
Route::get('/presentation', [AccueilController::class, 'presentation'])->name('app_presentation');
Route::get('/residente', [AccueilController::class, 'residente'])->name('app_residente');
Route::get('/club', [AccueilController::class, 'club'])->name('app_club');
Route::get('/inscription', [AccueilController::class, 'inscription'])->name('app_inscription');

// Contact (corrigé)
Route::get('/contact', [ContactController::class, 'index'])->name('app_contact');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');



require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
