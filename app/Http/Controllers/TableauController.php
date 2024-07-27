<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

use App\Models\Categorie;
use App\Models\Sous_categorie;
use App\Models\Ville;

class TableauController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $villes = Ville::all();

        return view('tableau.index',['categories' => $categories,'villes' => $villes,]);
    }

    public function new_categorie(Request $request)
    {
        $categories = $request->input('categorie_new');

        foreach ($categories as $categorie) {
            $vrf = Categorie::where('nom', $categorie)->first();

            if ($vrf) {
                return back()->with('error', 'Cette catégorie existe déjà.');
            }
        }

        foreach ($categories as $categorie) {
            $cat = new Categorie();
            $cat->nom = $categorie;
            $cat->save();
        }

        if ($cat) {

            return back()->with('success', 'Enregistrement éffectuée.');

        }else{

            return back()->with('error', 'Echec de l\'enregistrement.');

        }
    }

    public function new_scategorie(Request $request)
    {
        dd();

        $scategorie = $request->input('scategorie_new');
        $scategorie_id = $request->input('scategorie_id_new');

        $vrf = Sous_categorie::where('nom', $scategorie)->first();

        if ($vrf) {

            return back()->with('error', 'Cette sous-catégorie existe déjà.');

        }else{

            $cat = new Sous_categorie();
            $cat->nom = $scategorie;
            $cat->categorie_id = $scategorie_id;
            $cat->save();

            if ($cat) {

                return back()->with('success', 'Enregistrement éffectuée.');

            }else{

                return back()->with('error', 'Echec de l\'enregistrement.');

            }

        }    
    }

    public function new_ville(Request $request)
    {
        $villes = $request->input('ville_new');

        foreach ($villes as $ville) {
            $vrf = Ville::where('nom', $ville)->first();

            if ($vrf) {
                return back()->with('error', 'Cette Ville existe déjà.');
            }
        }

        foreach ($villes as $ville) {
            $vil = new Ville();
            $vil->nom = $ville;
            $vil->save();
        }

        if ($vil) {

            return back()->with('success', 'Enregistrement éffectuée.');

        }else{

            return back()->with('error', 'Echec de l\'enregistrement.');

        }

    }
        
}
