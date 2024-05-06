<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;

// Accueil-------------------------------------------------------------
Route::get('/', [Controller::class, 'index_accueil'])->name('index_accueil');
// -------------------------------------------------------------

// article-------------------------------------------------------------
Route::get('/Article', [ArticleController::class, 'index'])->name('index_article');
// -------------------------------------------------------------

// Detail article-------------------------------------------------------------
Route::get('/Detail', [ArticleController::class, 'index_detail'])->name('index_detail');
// -------------------------------------------------------------

// Detail article-------------------------------------------------------------
Route::get('/Profil', [ProfilController::class, 'index'])->name('index_profil');
// -------------------------------------------------------------

