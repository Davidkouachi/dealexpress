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

class CategorieController extends Controller
{
    public function index_telephone()
   {
      return view('annonce.telephone.telephone');
   }
   public function index_informatique()
   {
      return view('annonce.informatique.informatique');
   }
   public function index_vehicule()
   {
      return view('annonce.vehicule.vehicule');
   }
   public function index_electronique()
   {
      return view('annonce.electronique.electronique');
   }
   public function index_immobilier()
   {
      return view('annonce.immobilier.immobilier');
   }


   public function index_detail_telephone()
   {
      return view('annonce.telephone.detail');
   }
   public function index_detail_informatique()
   {
      return view('annonce.informatique.detail');
   }
   public function index_detail_vehicule()
   {
      return view('annonce.vehicule.detail');
   }
   public function index_detail_electronique()
   {
      return view('annonce.electronique.detail');
   }
   public function index_detail_immobilier()
   {
      return view('annonce.immobilier.detail');
   }
}
