<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Sous_categorie;
use App\Models\Ville;
use App\Models\Commune;
use App\Models\Marque_ordinateur;
use App\Models\Marque_vehicule;
use App\Models\Marque_telephone;

class AnnonceController extends Controller
{
   public function index_new_annonce()
   {
      $categories = Categorie::all();
      $villes = Ville::all();
      $marque_cars = Marque_vehicule::all();
      $marque_computers = Marque_ordinateur::all();
      $marque_tels = Marque_telephone::all();

      return view('annonce.new.autre',['categories' => $categories,'villes' => $villes,'marque_cars' => $marque_cars,'marque_computers' => $marque_computers,'marque_tels' => $marque_tels,]);
   }

   public function index_new_annonce_electronique()
   {
      $categorie = Categorie::where('nom', '=', 'ELECTRONIQUES')->first();
      $scategories = Sous_categorie::where('categorie_id', '=', $categorie->id)->get();
      $villes = Ville::all();
      $marque_computers = Marque_ordinateur::all();

      return view('annonce.new.electronique',['scategories'=>$scategories,'villes'=>$villes,'marque_computers'=>$marque_computers,]);
   }

   public function getSubcategories($categorieId)
   {
       $sousCategories = Sous_categorie::where('categorie_id', $categorieId)->get();
       return response()->json($sousCategories);
   }

   public function getCommune($villeId)
   {
      $communes = Commune::where('ville_id', $villeId)->get();
      return response()->json($communes);
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
