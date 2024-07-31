<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

use App\Models\Categorie;
use App\Models\Sous_categorie;
use App\Models\Ville;
use App\Models\Commune;

class Controller extends BaseController
{
    public function index_accueil()
    {
        $categories = Categorie::all();
        $villes = Ville::all();

        return view('accueil.index',['categories' => $categories,'villes' => $villes,]);
    }
}
