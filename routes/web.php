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

});

Route::middleware(['role:admin'])->group(function () {
	// Tableau de bord -------------------------------------------------------------
	Route::get('/Tableau de bord', [TableauController::class, 'index'])->name('index_tableau');

	Route::post('/New_categorie', [TableauController::class, 'new_categorie'])->name('new_categorie');
	Route::post('/New_scategorie', [TableauController::class, 'new_scategorie'])->name('new_scategorie');
	Route::post('/New_ville', [TableauController::class, 'new_ville'])->name('new_ville');
	// -------------------------------------------------------------
});

Route::middleware(['role:user'])->group(function () {

	// liste article profil-------------------------------------------------------------
	Route::post('/Nouvelle annonces', [AnnonceController::class, 'index_new_annonce'])->name('index_new_annonce');

	Route::get('/Nouvelle annonces immobilier', [AnnonceController::class, 'index_new_annonce_immobilier'])->name('index_new_annonce_immobilier');
	Route::get('/Nouvelle annonces vehicule', [AnnonceController::class, 'index_new_annonce_vehicule'])->name('index_new_annonce_vehicule');
	Route::get('/Nouvelle annonces travail', [AnnonceController::class, 'index_new_annonce_travail'])->name('index_new_annonce_travail');
	Route::get('/Nouvelle annonces autre', [AnnonceController::class, 'index_new_annonce_autre'])->name('index_new_annonce_autre');
	
	Route::get('/Mes annonces', [AnnonceController::class, 'index_liste_annonce'])->name('index_liste_annonce');
	Route::get('/Détail annonce', [AnnonceController::class, 'index_liste_detail'])->name('index_liste_detail');
	// -------------------------------------------------------------
});