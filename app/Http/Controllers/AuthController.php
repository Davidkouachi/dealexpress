<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use App\Models\Contact_user;

class AuthController extends Controller
{
    public function index_login()
    {

        return view('accueil.index');

    }

    public function index_registre()
    {
        return view('auth.registre');
    }

    public function auth_registre(Request $request)
    {
        $name = $request->input('nom');
        $email = $request->input('email');
        $tel = $request->input('tel');
        $password = $request->input('password2');
        $sms = $request->input('sms');
        $whatsapp = $request->input('whatsapp');
        $appel = $request->input('appel');

        $tel_vrf = Contact_user::where('tel', $request->tel)->first();
        if ($tel_vrf) {
            return back()->with('error', 'Cet numéro de téléphone existe déjà.');
        }

        $email_vrf = User::where('email', $request->email)->first();
        if ($email_vrf) {
            return back()->with('error', 'Cet email existe déjà.');
        }

        $users = new User();
        $users->name = $name;
        $users->email = $email;
        $users->password = bcrypt($request->password);
        $users->role = 'user';
        $users->save();

        $tels = new Contact_user();
        $tels->tel = $tel;
        $tels->sms = $sms;
        $tels->whatsapp = $whatsapp;
        $tels->appel = $appel;
        $tels->user_id = $users->id;
        $tels->save();

        if ($users && $tels) {
            
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                Session::forget('url.intended');

                //Auth::logoutOtherDevices($request->password);

                $user_id = Auth::user()->id;

                $tel = Contact_user::where('user_id', $user_id)->first();
                if ($tel) {
                    session(['user_tel' => $tel]);
                }

                return redirect()->back()->with('success', 'Votre compte a étè crée avec succées.');
            }

        }

        return redirect()->route('index_accueil');
    }

    public function auth_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            Session::forget('url.intended');

            //Auth::logoutOtherDevices($request->password);
            
            $user_id = Auth::user()->id;

            $tel = Contact_user::where('user_id', $user_id)->first();
            if ($tel) {
                session(['user_tel' => $tel]);
            }

            return redirect()->back()->with('success', 'Connexion réussi.');
        }

        return redirect()->back()->with('error', 'L\'authentification a échoué. Veuillez vérifier vos informations d\'identification et réessayer.',);
    }

    public function deconnexion(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index_accueil')->with('info', 'Vous avez été déconnecté avec succès.');
    }
}
