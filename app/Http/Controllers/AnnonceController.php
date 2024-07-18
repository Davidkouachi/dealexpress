<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnonceController extends Controller
{
   public function index()
   {
      return view('annonce.index');
   }

   public function index_new_annonce()
   {
      return view('annonce.new');
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
