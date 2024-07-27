<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnonceController extends Controller
{
   public function index()
   {
      return view('annonce.index');
   }

   public function index_new_annonce_immobilier()
   {
      return view('annonce.new.immobilier');
   }

   public function index_new_annonce_vehicule()
   {
      return view('annonce.new.vehicule');
   }

   public function index_new_annonce_travail()
   {
      return view('annonce.new.travail');
   }

   public function index_new_annonce_autre()
   {
      return view('annonce.new.autre');
   }

   public function index_new_annonce(Request $request)
   {
      $choix = $request->input('choix');

      if ($choix === 'immobilier') {
         return redirect()->route('index_new_annonce_immobilier');
      }elseif ($choix === 'vehicule') {
         return redirect()->route('index_new_annonce_vehicule');
      }elseif ($choix === 'travail') {
         return redirect()->route('index_new_annonce_travail');
      }elseif ($choix === 'autre') {
         return redirect()->route('index_new_annonce_autre');
      }
      
   }

   public function index_detail()
   {
      return view('annonce.detail');
   }

   public function index_liste_annonce()
   {
      return view('liste.annonce');
   }

   public function index_liste_detail()
   {
      return view('liste.detail');
   }

}
