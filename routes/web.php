<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AnnonceController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AbsenceRequestController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware('auth:admin')->group(function (){
    Route::get('admin/dashboard', [AccueilController::class, 'index']);
    Route::get('/admin/annonces', [AnnonceController::class, 'index'])->name('admin/annonces');
    Route::get('/admin/annonces/create', [AnnonceController::class, 'create'])->name('admin/annonces/create');
    Route::post('/admin/annonces/store', [AnnonceController::class, 'store'])->name('admin/annonces/store');
    Route::get('/admin/annonces/{annonce}', [AnnonceController::class, 'show'])->name('admin/annonces/show');
    Route::get('/admin/annonces/{annonce}/edit', [AnnonceController::class, 'edit'])->name('admin/annonces/edit');
    Route::put('/admin/annonces/{annonce}', [AnnonceController::class, 'update'])->name('admin/annonces/update');
    Route::delete('/admin/annonces/{annonce}', [AnnonceController::class, 'destroy'])->name('admin/annonces/destroy');
});

Route::get('/', [AccueilController::class, 'index'])->name('app_accueil');
Route::get('/presentation', [AccueilController::class, 'presentation'])->name('app_presentation');
Route::get('/residente', [AccueilController::class, 'residente'])->name('app_residente');
Route::get('/club', [AccueilController::class, 'club'])->name('app_club');
Route::get('/inscription', [AccueilController::class, 'inscription'])->name('app_inscription');


// Contact (corrigé)
Route::get('/contact', [AccueilController::class, 'contact'])->name('app_contact');
Route::post('/contact', [ContactController::class, 'store']);



require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
