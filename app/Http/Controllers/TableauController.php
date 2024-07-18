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
        $categorie = $request->input('categorie_new');

        $vrf = Categorie::where('nom', $categorie)->first();

        if ($vrf) {

            return back()->with('error', 'Cette catégorie existe déjà.');

        }else{

            $cat = new Categorie();
            $cat->nom = $categorie;
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
        $ville = $request->input('ville_new');

        $vrf = Ville::where('nom', $ville)->first();

        if ($vrf) {

            return back()->with('error', 'Cette catégorie existe déjà.');

        }else{

            $vil = new Ville();
            $vil->nom = $ville;
            $vil->save();

            if ($vil) {

                return back()->with('success', 'Enregistrement éffectuée.');

            }else{

                return back()->with('error', 'Echec de l\'enregistrement.');

            }

        }
        
    }
}
