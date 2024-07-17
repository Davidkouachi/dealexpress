<!DOCTYPE html>
<html class="js" lang="zxx">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <head>
    <meta charset="utf-8">
    <meta content="Softnio" name="author">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." name="description">
    <link href="{{asset('1.ico')}}" rel="shortcut icon">
    <title>
        @yield('titre')
    </title>
    <link href="{{asset('assets/css/dashlite55a0.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme55a0.css')}}" id="skin-default" rel="stylesheet">
    </link>
    </link>
    </link>
    </meta>
    </meta>
    </meta>
    </meta>
</head>

<body class="nk-body ui-rounder has-sidebar ui-light ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @yield('menu')
            <div class="nk-wrap ">
                <div class="nk-header is-light nk-header-fixed is-light">
                    <div class="container-xl wide-xl">
                        <div class="nk-header-wrap">
                            @yield('btn_menu')
                            <div class="nk-header-brand ">
                                <a class="logo-link" href="{{route('index_accueil')}}">
                                    <img height="50" width="50" src="{{asset('image/1.png')}}" /></img>
                                </a>
                            </div>                           
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    @if(request()->routeIs('index_accueil', 'index_detail', 'index_profil','index_liste_detail','index_liste_annonce') )
                                    <li class="dropdown notification-dropdown">
                                        <a class="nk-quick-nav-icon" href="{{route('index_annonce')}}">
                                            <em class="icon ni ni-box-view-fill"></em>
                                            <span class="fs-15px"></span>
                                        </a>
                                    </li>
                                    @endif
                                    @if(request()->routeIs('index_tableau') )
                                    <li class="dropdown notification-dropdown">
                                        <a class="nk-quick-nav-icon" href="{{route('index_tableau')}}">
                                            <em class="icon ni ni-redo"></em>
                                            <span class="fs-15px"></span>
                                        </a>
                                    </li>
                                    @endif
                                    @if(request()->routeIs('index_liste_annonce') )
                                    <li class="dropdown notification-dropdown">
                                        <a class="nk-quick-nav-icon" data-bs-toggle="modal" data-bs-target="#modalNannonce">
                                            <em class="icon ni ni-plus-circle"></em>
                                            <span class="fs-15px"></span>
                                        </a>
                                    </li>
                                    @endif
                                    @if(!request()->routeIs('index_accueil', 'index_detail', 'index_profil','index_tableau') || request()->routeIs('index_detail', 'index_profil') )
                                    <li class="dropdown notification-dropdown">
                                        <a class=" nk-quick-nav-icon" href="{{route('index_accueil')}}">
                                            <em class="icon ni ni-home"></em>
                                            <span class="fs-15px"></span>
                                        </a>
                                    </li>
                                    @endif
                                    @if(request()->routeIs('index_annonce'))
                                    <li class="dropdown notification-dropdown">
                                        <a class=" nk-quick-nav-icon" data-bs-toggle="modal" data-bs-target="#modalSearch" >
                                            <em class="icon ni ni-search"></em>
                                        </a>
                                    </li>
                                    @endif
                                    <li class="dropdown user-dropdown">
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt">
                                                    </em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            @if (Auth::check())
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{route('index_profil')}}">
                                                            <em class="icon ni ni-user-alt">
                                                            </em>
                                                            <span>
                                                                Voir profil
                                                            </span>
                                                        </a>
                                                    </li>
                                                    @if(!request()->routeIs('index_tableau') )
                                                    <li>
                                                        <a href="{{route('index_liste_annonce')}}">
                                                            <em class="icon ni ni-inbox-in">
                                                            </em>
                                                            <span>
                                                                Mes annonces
                                                            </span>
                                                        </a>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{route('deconnexion')}}">
                                                            <em class="icon ni ni-signout">
                                                            </em>
                                                            <span>
                                                                Se Déconnecter
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            @else
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#modalSinscrire">
                                                            <em class="icon ni ni-user-add">
                                                            </em>
                                                            <span>
                                                                S'incrire
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#modalConnexion">
                                                            <em class="icon ni ni-lock">
                                                            </em>
                                                            <span>
                                                                Se connecter
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content')

                <div class="nk-footer">
                    <div class="container-xl wide-xl">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright d-flex w-100">
                                <span class="me-2" >
                                    ©<script>
                                    document.write(new Date().getFullYear())
                                    </script>.DealExpress
                                </span>
                                <marquee  behavior="" direction="">
                                    <span class="text-danger" >
                                        Attention :
                                    </span>
                                    <span class="" >
                                        vwewev vewivwenvwe veuinvewnve
                                    </span>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(!request()->routeIs('index_tableau') )
    <a class="pmo-st pmo-dark active" data-bs-toggle="modal" data-bs-target="#modalCommentaire" >
        <div class="pmo-st-img">
            <em class="icon ni ni-chat fs-20px" ></em>
        </div>
    </a>
    @endif

    <div class="modal fade" tabindex="-1" id="modalL" aria-modal="true" style="position: fixed;" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <h5 class="nk-modal-title text-warning ">Traitement en cours</h5>
                        <div class="nk-modal-text">
                            <div class="text-center">
                                <div class="spinner-border text-warning" role="status"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalCommentaire">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouvelle suggestion</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                </div>
                <div class="modal-body">
                    <form id="form" method="POST" action="#" class="form-validate">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="default-textarea">Suggestion</label>
                            <div class="form-control-wrap">
                                <textarea name="text" class="form-control no-resize" id="default-textarea" required data-msg="Error message re"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Fichier (facultatif)</label>
                            <div class="form-control-wrap">
                                <div class="form-file">
                                    <input type="file" class="form-file-input" id="customFile">
                                    <label class="form-file-label" for="customFile">Choisir un fichier</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-success">
                                <span>Envoyer</span>
                                <em class="icon ni ni-send" ></em>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Suggestion</span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSinscrire" aria-modal="true" style="position: fixed;" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body bg-white rounded">
                    <div class="nk-block-head">
                        <div class="brand-logo pb-4 text-center">
                            <a class="logo-link">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('image/1.png')}}" srcset="{{asset('image/1.png')}}">
                            </a>
                        </div>
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">Création de compte</h4>
                            <!-- <div class="nk-block-des">
                                    <p>Create New Dashlite Account</p>
                            </div> -->
                        </div>
                    </div>
                    <form id="registre_sinscrire" class="" action="/auth_registre" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Nom et Prénoms</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-md" name="nom" id="nom_sinscrire" placeholder="Entrer votre Nom et prénoms">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <div class="form-control-wrap">
                                <input type="email" class="form-control form-control-md" name="email" id="email_sinscrire" placeholder="Entrer votre email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Contact</label>
                            <div class="form-control-wrap mb-2">
                                <input name="tel" id="tel_sinscrire" type="tel" class="form-control form-control-md" placeholder="Entrer votre contact" maxlength="10">
                            </div>
                            <div class="form-group">
                                <ul class="custom-control-group g-3 align-center" id="checkboxGroup">
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input name="sms" type="checkbox" class="custom-control-input" id="chat" value="oui">
                                            <label class="custom-control-label" for="chat">
                                                <span>Sms</span>
                                                <em class="icon ni ni-chat"></em>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input name="whatsapp" type="checkbox" class="custom-control-input" id="whatsapp" value="oui">
                                            <label class="custom-control-label" for="whatsapp">
                                                <span>Whatsapp</span>
                                                <em class="icon ni ni-whatsapp"></em>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input name="appel" type="checkbox" class="custom-control-input" id="call" value="oui">
                                            <label class="custom-control-label" for="call">
                                                <span>Appel</span>
                                                <em class="icon ni ni-call"></em>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                <p id="errorMessage" style="color:red; display:none;">Veuillez sélectionner au moins une option.</p>
                            </div>
                            <script>
                                var inputElement = document.getElementById('tel');
                                inputElement.addEventListener('input', function() {
                                    // Supprimer tout sauf les chiffres
                                    this.value = this.value.replace(/[^0-9]/g, '');
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mot de passe</label>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch md" data-target="password_sinscrire">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input name="password" type="password" class="form-control form-control-md" id="password_sinscrire" placeholder="Entrer votre mot de passe">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirmer le mot de passe</label>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch md" data-target="password2_sinscrire">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input name="password2" type="password" class="form-control form-control-md" id="password2_sinscrire" placeholder="Entrer a nouveau votre mot de passe">
                            </div>
                        </div>
                        <div class="form-group row g-gs">
                            <div class="col-lg-6">
                                <a data-bs-dismiss="modal" aria-label="Close" class="btn btn-md btn-outline-danger btn-block btn-dim ">
                                    <em class="icon ni ni-cross-circle"></em>
                                    <span>Fermer</span>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-md btn-outline-success btn-block btn-dim ">
                                    <span>Création de compte</span>
                                    <em class="icon ni ni-arrow-right-circle"></em>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-note-s2 text-center pt-4">
                        Vous avez déja un compte ?
                        <a href="{{route('index_login')}}">
                            <strong>Se connecter</strong>
                        </a>
                    </div>
                    <!-- <div class="text-center pt-4 pb-3">
                            <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                    </div>
                    <ul class="nav justify-center gx-8">
                        <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                    </ul> -->   
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalConnexion" aria-modal="true" style="position: fixed;" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body bg-white rounded">
                    <div class="nk-block-head">
                        <div class="brand-logo pb-4 text-center">
                            <a class="logo-link">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('image/1.png')}}" srcset="{{asset('image/1.png')}}">
                            </a>
                        </div>
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">Se connecter</h4>
                            <!-- <div class="nk-block-des">
                                    <p>Create New Dashlite Account</p>
                            </div> -->
                        </div>
                    </div>
                    <form id="registre_connexion" class="" action="/auth_login" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <div class="form-control-wrap">
                                <input name="email" type="email" class="form-control form-control-md" id="email" placeholder="Entrer votre Email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password">Mot de passe</label>
                                <a class="link link-primary link-sm" href="#">Mot de passe oublié ?</a>
                            </div>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch md" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" value="{{ old('password') }}" name="password" class="form-control form-control-md" id="password" placeholder="Entrer votre Mot de passe">
                            </div>
                        </div>
                        <div class="form-group row g-gs">
                            <div class="col-lg-6">
                                <a data-bs-dismiss="modal" aria-label="Close" class="btn btn-lg btn-dim btn-outline-danger btn-block">
                                    <em class="icon ni ni-cross-circle"></em>
                                    <span>Fermer</span>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-lg btn-dim btn-outline-success btn-block">
                                    <span>Connexion</span>
                                    <em class="icon ni ni-arrow-right-circle"></em>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-note-s2 text-center pt-4">
                        Vous n'avez pas de compte ?
                        <a class="" href="{{route('index_registre')}}">Créer un compte</a>
                    </div>
                    <!-- <div class="text-center pt-4 pb-3">
                            <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                    </div>
                    <ul class="nav justify-center gx-8">
                        <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalNannonce" aria-modal="true" style="position: fixed;" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Nouvelle Annonce
                    </h5>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name-1">
                                        Full Name
                                    </label>
                                    <div class="form-control-wrap">
                                        <input required data-msg="Error message " class="form-control" id="full-name-1" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="email-address-1">
                                        Email address
                                    </label>
                                    <div class="form-control-wrap">
                                        <input class="form-control" id="email-address-1" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no-1">
                                        Phone No
                                    </label>
                                    <div class="form-control-wrap">
                                        <input class="form-control" id="phone-no-1" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="pay-amount-1">
                                        Amount
                                    </label>
                                    <div class="form-control-wrap">
                                        <input class="form-control" id="pay-amount-1" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        Communication
                                    </label>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input class="custom-control-input" id="com-email-1" type="checkbox">
                                                <label class="custom-control-label" for="com-email-1">
                                                    Email
                                                </label>
                                                </input>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input class="custom-control-input" id="com-sms-1" type="checkbox">
                                                <label class="custom-control-label" for="com-sms-1">
                                                    SMS
                                                </label>
                                                </input>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input class="custom-control-input" id="com-phone-1" type="checkbox">
                                                <label class="custom-control-label" for="com-phone-1">
                                                    Phone
                                                </label>
                                                </input>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        Payment Methods
                                    </label>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input class="custom-control-input" id="pay-card-1" type="checkbox">
                                                <label class="custom-control-label" for="pay-card-1">
                                                    Card
                                                </label>
                                                </input>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input class="custom-control-input" id="pay-bitcoin-1" type="checkbox">
                                                <label class="custom-control-label" for="pay-bitcoin-1">
                                                    Bitcoin
                                                </label>
                                                </input>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                <input class="custom-control-input" id="pay-cash-1" type="checkbox">
                                                <label class="custom-control-label" for="pay-cash-1">
                                                    Cash
                                                </label>
                                                </input>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button class="btn btn-mw btn-dim btn-outline-danger" type="reset" data-bs-dismiss="modal">
                                        Annulé
                                    </button>
                                    <button class="btn btn-mw btn-dim btn-outline-success" type="submit">
                                        Poster
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">
                        Annonce
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("registre_sinscrire").addEventListener("submit", function(event) {
            event.preventDefault();

            document.getElementById('errorMessage').style.display = 'none';

            var name_sinscrire = document.getElementById("nom_sinscrire").value;
            var email_sinscrire = document.getElementById("email_sinscrire").value;
            var tel_sinscrire = document.getElementById("tel_sinscrire").value;
            var password1_sinscrire = document.getElementById("password_sinscrire").value;
            var password2_sinscrire = document.getElementById("password2_sinscrire").value;

            if (!name_sinscrire || !email_sinscrire || !tel_sinscrire || !password1_sinscrire || !password2_sinscrire ) {
                NioApp.Toast("<h5>Alert</h5><p>Veuillez remplir tous les champs.</p>", "warning", {position: "top-right"});
                return false;
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email_sinscrire)) {
                NioApp.Toast("<h5>Information</h5><p>Veuillez saisir une adresse e-mail valide.</p>", "info", {position: "top-right"});
                return false;
            }

            if (tel_sinscrire.length !== 10) {
                NioApp.Toast("<h5>Information</h5><p>Veuillez saisir un numéro de téléphone valide.</p>", "info", {position: "top-right"});
                return false;
            }

            var checkboxes = document.querySelectorAll('#checkboxGroup input[type="checkbox"]');
            var isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
            
            if (!isChecked) {
                document.getElementById('errorMessage').style.display = 'block';
                NioApp.Toast("<h5>Alert</h5><p>Veuillez selectionner une case.</p>", "warning", {position: "top-right"});
                return false;
            }

            if (password1_sinscrire !== password2_sinscrire) {
                NioApp.Toast("<h5>Erreur</h5><p>Les mots de passe ne correspondent pas.</p>", "error", {position: "top-right"});
                return false;
            }
            
            if (password1_sinscrire === password2_sinscrire) {
                // Vérification si le mot de passe satisfait les critères
                if (!verifierMotDePasse(password1_sinscrire) || !verifierMotDePasse(password2_sinscrire) ) {
                    NioApp.Toast("<h5>Information</h5><p>Le mot de passe doit comporter au moins 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre.</p>", "error", {position: "top-right"});
                    return false;
                }

            }

            $('.modal').modal('hide');
            $(`#modalL`).modal('hide');
            $(`#modalL`).modal('show');

            this.submit();

            function verifierMotDePasse(motDePasse) {

                if (motDePasse.length < 8) {
                    return false;
                }

                if (!/[A-Z]/.test(motDePasse)) {
                    return false;
                }

                if (!/[a-z]/.test(motDePasse)) {
                    return false;
                }

                if (!/\d/.test(motDePasse)) {
                    return false;
                }

                return true;
            }

        });
    </script>

    <script>
        document.getElementById("registre_connexion").addEventListener("submit", function(event) {
            event.preventDefault();

            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (!email || !password) {
                NioApp.Toast("<h5>Alert</h5><p>Veuillez remplir tous les champs.</p>", "warning", {position: "top-right"});
                return false;
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                NioApp.Toast("<h5>Information</h5><p>Veuillez saisir une adresse e-mail valide.</p>", "info", {position: "top-right"});
                return false;
            }
            
            if (!verifierMotDePasse(password)) {
                NioApp.Toast("<h5>Information</h5><p>Le mot de passe doit comporter au moins 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre.</p>", "error", {position: "top-right"});
                return false;
            }

            $('.modal').modal('hide');
            $(`#modalL`).modal('hide');
            $(`#modalL`).modal('show');

            this.submit();

            function verifierMotDePasse(motDePasse) {

                if (motDePasse.length < 8) {
                    return false;
                }

                if (!/[A-Z]/.test(motDePasse)) {
                    return false;
                }

                if (!/[a-z]/.test(motDePasse)) {
                    return false;
                }

                if (!/\d/.test(motDePasse)) {
                    return false;
                }

                return true;
            }

        });
    </script>

    <script>
        // Fonction pour formater le prix avec des points
        function formatPrice(input) {
            // Supprimer tous les points existants
            input = input.replace(/\./g, '');
            
            // Formater le prix avec des points
            return input.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // Écouter l'événement d'entrée sur les champs de texte
        document.getElementById('min-price').addEventListener('input', function() {
            this.value = formatPrice(this.value);
        });

        document.getElementById('max-price').addEventListener('input', function() {
            this.value = formatPrice(this.value);
        });

        // Événement pour permettre uniquement les chiffres
        document.getElementById('min-price').addEventListener('keypress', function(event) {
            const key = event.key;
            if (isNaN(key)) {
                event.preventDefault();
            }
        });

        document.getElementById('max-price').addEventListener('keypress', function(event) {
            const key = event.key;
            if (isNaN(key)) {
                event.preventDefault();
            }
        });
    </script>

    <script src="{{asset('assets/js/bundle55a0.js')}}"></script>
    <script src="{{asset('assets/js/scripts55a0.js')}}"></script>
    <script src="{{asset('assets/js/demo-settings55a0.js')}}"></script>
    <script src="{{asset('assets/js/charts/gd-campaign55a0.js')}}"></script>
    <script src="{{asset('assets/js/example-toastr55a0.js') }}"></script>

    @if (session('success'))
        <script>
            NioApp.Toast("<h5>Succès</h5><p>{{ session('success') }}.</p>", "success", {position: "top-right"});
        </script>
        {{ session()->forget('success') }}
    @endif
    @if (session('error'))
        <script>
            NioApp.Toast("<h5>Erreur</h5><p>{{ session('error') }}.</p>", "error", {position: "top-right"});
        </script>
        {{ session()->forget('error') }}
    @endif
    @if (session('warning'))
        <script>
            NioApp.Toast("<h5>Alert</h5><p>{{ session('warning') }}.</p>", "warning", {position: "top-right"});
        </script>
        {{ session()->forget('warning') }}
    @endif
    @if (session('info'))
        <script>
            NioApp.Toast("<h5>Information</h5><p>{{ session('info') }}.</p>", "info", {position: "top-right"});
        </script>
        {{ session()->forget('info') }}
    @endif
</body>


</html>