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

	Route::get('/Liste_categorie', [TableauController::class, 'liste_categorie'])->name('liste_categorie');
	Route::post('/New_categorie', [TableauController::class, 'new_categorie'])->name('new_categorie');

	Route::get('/Liste_scategorie', [TableauController::class, 'liste_scategorie'])->name('liste_scategorie');
	Route::post('/New_scategorie', [TableauController::class, 'new_scategorie'])->name('new_scategorie');

	Route::get('/Liste_ville', [TableauController::class, 'liste_ville'])->name('liste_ville');
	Route::post('/New_ville', [TableauController::class, 'new_ville'])->name('new_ville');

	Route::get('/Liste_commune', [TableauController::class, 'liste_commune'])->name('liste_commune');
	Route::post('/New_commune', [TableauController::class, 'new_commune'])->name('new_commune');

	// -------------------------------------------------------------
});

Route::middleware(['role:user'])->group(function () {

	// liste article profil-------------------------------------------------------------
	Route::post('/traitementsannonces', [AnnonceController::class, 'traitement_annonce'])->name('traitement_annonce');
	Route::get('/Nouvelle annonces', [AnnonceController::class, 'index_new_annonce'])->name('index_new_annonce');
	
	Route::get('/Mes annonces', [AnnonceController::class, 'index_liste_annonce'])->name('index_liste_annonce');
	Route::get('/Détail annonce', [AnnonceController::class, 'index_liste_detail'])->name('index_liste_detail');
	// -------------------------------------------------------------
});

Route::get('/get-subcategories/{categorieId}', [AnnonceController::class, 'getSubcategories']);
Route::get('/get-commune/{villeId}', [AnnonceController::class, 'getCommune']);