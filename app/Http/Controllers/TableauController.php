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
use App\Models\Commune;

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

    public function liste_categorie()
    {
        $categories = Categorie::all();

        foreach ($categories as $key => $value) {
            $value->nbre = Sous_categorie::where('categorie_id', $value->id)->count();
        }

        return view('tableau.liste.categorie',['categories' => $categories]);
    }

    public function new_scategorie(Request $request)
    {

        $scategorie = $request->input('scategorie_new');
        $scategorie_id = $request->input('scategorie_id_new');

        foreach ($scategorie as $categorie) {

            $vrf = Sous_categorie::where('nom', $categorie)->where('categorie_id', $scategorie_id)->first();

            if ($vrf) {
                
            }else{

                $cat = new Sous_categorie();
                $cat->nom = $categorie;
                $cat->categorie_id = $scategorie_id;
                $cat->save();
            }
        }

        if ($cat) {

            return back()->with('success', 'Enregistrement éffectuée.');

        }else{

            return back()->with('error', 'Echec de l\'enregistrement.');

        }   
    }

    public function liste_scategorie()
    {
        $categories = Categorie::all();
        $scategories = Sous_categorie::join('categories', 'sous_categories.categorie_id', '=', 'categories.id')
                                    ->select('sous_categories.*', 'categories.nom as categorie')
                                    ->orderBy('categories.nom')
                                    ->get();

        return view('tableau.liste.scategorie',['scategories' => $scategories,'categories' => $categories]);
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

    public function liste_ville()
    {
        $villes = Ville::all();

        foreach ($villes as $key => $value) {
            $value->nbre = Commune::where('ville_id', $value->id)->count();
        }

        return view('tableau.liste.ville',['villes' => $villes]);
    }


    public function new_commune(Request $request)
    {

        $communes = $request->input('commune_new');
        $ville_id = $request->input('ville_id_new');

        foreach ($communes as $commune) {

            $vrf = Commune::where('nom', $commune)->where('ville_id', $ville_id)->first();

            if ($vrf) {
                
            }else{

                $cat = new Commune();
                $cat->nom = $commune;
                $cat->ville_id = $ville_id;
                $cat->save();
            }
        }

        if ($cat) {

            return back()->with('success', 'Enregistrement éffectuée.');

        }else{

            return back()->with('error', 'Echec de l\'enregistrement.');

        }   
    }

    public function liste_commune()
    {
        $villes = Ville::all();
        $communes = Commune::join('villes', 'communes.ville_id', '=', 'villes.id')
                                    ->select('communes.*', 'villes.nom as ville')
                                    ->orderBy('villes.nom')
                                    ->get();

        return view('tableau.liste.commune',['communes' => $communes,'villes' => $villes]);
    }  
}
