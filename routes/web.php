<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TableauController;


// Login & Registre-------------------------------------------------------------
Route::get('/Connexion', [AuthController::class, 'index_login'])->name('index_login');
Route::get('/Inscription', [AuthController::class, 'index_registre'])->name('index_registre');
// -------------------------------------------------------------

// Registre-------------------------------------------------------------
Route::post('/auth_registre', [AuthController::class, 'auth_registre'])->name('auth_registre');
// -------------------------------------------------------------

// Login-------------------------------------------------------------
Route::post('/auth_login', [AuthController::class, 'auth_login'])->name('auth_login');
// -------------------------------------------------------------


// Accueil-------------------------------------------------------------
Route::get('/', [Controller::class, 'index_accueil'])->name('index_accueil');
// -------------------------------------------------------------

// article-------------------------------------------------------------
Route::get('/Annonces', [AnnonceController::class, 'index'])->name('index_annonce');
// -------------------------------------------------------------

// Detail article-------------------------------------------------------------
Route::get('/Detail Annonce', [AnnonceController::class, 'index_detail'])->name('index_detail');
// -------------------------------------------------------------


Route::middleware(['auth'])->group(function () {

    /*--Deconnexion---*/
    Route::get('/Deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
    /*------*/

    // Profil-------------------------------------------------------------
	Route::get('/Profil', [ProfilController::class, 'index'])->name('index_profil');
	// -------------------------------------------------------------

	// liste article profil-------------------------------------------------------------
	Route::get('/Mes annonces', [AnnonceController::class, 'index_liste_annonce'])->name('index_liste_annonce');
	Route::get('/Détail annonce', [AnnonceController::class, 'index_liste_detail'])->name('index_liste_detail');
	// -------------------------------------------------------------

	// Tableau de bord -------------------------------------------------------------
	Route::get('/Tableau de bord', [TableauController::class, 'index'])->name('index_tableau');
	// -------------------------------------------------------------
   
});