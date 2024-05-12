<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TableauController;

// Accueil-------------------------------------------------------------
Route::get('/', [Controller::class, 'index_accueil'])->name('index_accueil');
// -------------------------------------------------------------

// article-------------------------------------------------------------
Route::get('/Article', [ArticleController::class, 'index'])->name('index_article');
// -------------------------------------------------------------

// Detail article-------------------------------------------------------------
Route::get('/Detail', [ArticleController::class, 'index_detail'])->name('index_detail');
// -------------------------------------------------------------

// Profil-------------------------------------------------------------
Route::get('/Profil', [ProfilController::class, 'index'])->name('index_profil');
// -------------------------------------------------------------

// liste article profil-------------------------------------------------------------
Route::get('/Mes annonces', [ArticleController::class, 'index_liste_article'])->name('index_liste_article');
Route::get('/Détail annonce', [ArticleController::class, 'index_liste_detail'])->name('index_liste_detail');
// -------------------------------------------------------------

// Tableau de bord -------------------------------------------------------------
Route::get('/Tableau de bord', [TableauController::class, 'index'])->name('index_tableau');
// -------------------------------------------------------------

