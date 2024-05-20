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
                                    @if(request()->routeIs('index_accueil', 'index_detail', 'index_profil','index_liste_detail','index_liste_article') )
                                    <li class="dropdown notification-dropdown">
                                        <a class="nk-quick-nav-icon" href="{{route('index_article')}}">
                                            <em class="icon ni ni-package-fill"></em>
                                            <span class="fs-15px"></span>
                                        </a>
                                    </li>
                                    @endif
                                    @if(!request()->routeIs('index_accueil', 'index_detail', 'index_profil') || request()->routeIs('index_detail', 'index_profil') )
                                    <li class="dropdown notification-dropdown">
                                        <a class=" nk-quick-nav-icon" href="{{route('index_accueil')}}">
                                            <em class="icon ni ni-home"></em>
                                            <span class="fs-15px"></span>
                                        </a>
                                    </li>
                                    @endif
                                    @if(request()->routeIs('index_article'))
                                    <li class="dropdown notification-dropdown">
                                        <a class=" nk-quick-nav-icon" data-bs-toggle="modal" data-bs-target="#modalSearch" >
                                            <em class="icon ni ni-search"></em>
                                        </a>
                                    </li>
                                    @endif
                                    <li class="dropdown chats-dropdown">
                                        <a class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown" href="#">
                                            <div class="icon-status icon-status-na">
                                                <em class="icon ni ni-cart">
                                                </em>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title fw-bold">
                                                    Panier
                                                </span>
                                            </div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item">
                                                        <div class="chat-link d-flex justify-content-start">
                                                            <div class="chat-media user-avatar">
                                                                <img src="images/product/a.png"/>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">
                                                                        George Philips
                                                                    </div>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        Prix: 1.000.000 fcfa,  Quantité: 2
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-context">
                                                                <a class="btn btn-icon btn-xs btn-outline-danger btn-dim">
                                                                    <em class="icon ni ni-cross">
                                                                    </em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="chat-item">
                                                        <div class="chat-link d-flex justify-content-start">
                                                            <div class="chat-media user-avatar">
                                                                <img src="images/product/b.png"/>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">
                                                                        George Philips
                                                                    </div>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        Prix: 1.000.000 fcfa,  Quantité: 2
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-context">
                                                                <a class="btn btn-icon btn-xs btn-outline-danger btn-dim" href="#">
                                                                    <em class="icon ni ni-cross">
                                                                    </em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="chat-item">
                                                        <div class="chat-link d-flex justify-content-start">
                                                            <div class="chat-media user-avatar">
                                                                <img src="images/product/c.png"/>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">
                                                                        George Philips
                                                                    </div>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        Prix: 1.000.000 fcfa,  Quantité: 2
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-context">
                                                                <a class="btn btn-icon btn-xs btn-outline-danger btn-dim" href="#">
                                                                    <em class="icon ni ni-cross">
                                                                    </em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="chat-item">
                                                        <div class="chat-link d-flex justify-content-start">
                                                            <div class="chat-media user-avatar">
                                                                <img src="images/product/d.png"/>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">
                                                                        George Philips
                                                                    </div>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        Prix: 1.000.000 fcfa,  Quantité: 2
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-context">
                                                                <a class="btn btn-icon btn-xs btn-outline-danger btn-dim" href="#">
                                                                    <em class="icon ni ni-cross">
                                                                    </em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="chat-item">
                                                        <div class="chat-link d-flex justify-content-start">
                                                            <div class="chat-media user-avatar">
                                                                <img src="images/product/e.png"/>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">
                                                                        George Philips
                                                                    </div>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        Prix: 1.000.000 fcfa,  Quantité: 2
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-context">
                                                                <a class="btn btn-icon btn-xs btn-outline-danger btn-dim" href="#">
                                                                    <em class="icon ni ni-cross">
                                                                    </em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-foot">
                                                <span class="sub-title nk-dropdown-title">
                                                    Total : 1.000.000 fcfa
                                                </span>
                                                <a class="btn btn-outline-success btn-dim btn-md">
                                                    <span>Commander</span>
                                                    <em class="icon ni ni-arrow-right-circle"></em>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt">
                                                    </em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <em class="icon ni ni-user-alt"></em>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">
                                                            Abu Bin Ishtiyak
                                                        </span>
                                                        <span class="sub-text">
                                                            info@softnio.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#modalAnnonce">
                                                            <em class="icon ni ni-package-fill">
                                                            </em>
                                                            <span>
                                                                Poster une annonce
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('index_liste_article')}}">
                                                            <em class="icon ni ni-inbox-in">
                                                            </em>
                                                            <span>
                                                                Mes annonces
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('index_tableau')}}">
                                                            <em class="icon ni ni-trend-up">
                                                            </em>
                                                            <span>
                                                                Tableau de bord
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="#">
                                                            <em class="icon ni ni-signout">
                                                            </em>
                                                            <span>
                                                                Se Déconnecter
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#modalSincrire">
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

    <a class="pmo-st pmo-dark active" data-bs-toggle="modal" data-bs-target="#modalCommentaire" >
        <div class="pmo-st-img">
            <em class="icon ni ni-chat fs-20px" ></em>
        </div>
    </a>

    <div class="modal fade" tabindex="-1" id="modalCommentaire">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouvelle suggestion</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                </div>
                <div class="modal-body">
                    <form id="form" method="POST" action="#">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="default-textarea">Suggestion</label>
                            <div class="form-control-wrap">
                                <textarea required name="text" class="form-control no-resize" id="default-textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-success">
                                <em class="icon ni ni-check" ></em>
                                <span>Sauvegarder</span>
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

    <div class="modal fade" id="modalSincrire" aria-modal="true" style="position: fixed;" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        S'inscrire
                    </h5>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate">
                        <div class="form-group">
                            <label class="form-label" for="full-name">
                                Full Name
                            </label>
                            <div class="form-control-wrap">
                                <input data-msg="Error message" class="form-control" id="full-name" required="" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">
                                Email address
                            </label>
                            <div class="form-control-wrap">
                                <input data-msg="Error message" class="form-control" id="email-address" required="" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone-no">
                                Phone No
                            </label>
                            <div class="form-control-wrap">
                                <input data-msg="Error message" class="form-control" id="phone-no" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pay-amount">
                                Amount
                            </label>
                            <div class="form-control-wrap">
                                <input data-msg="Error message" class="form-control" id="pay-amount" type="number" />
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-mw btn-dim btn-outline-danger" type="reset" data-bs-dismiss="modal">
                                Annulée
                            </button>
                            <button class="btn btn-mw btn-dim btn-outline-success" type="submit">
                                Terminé
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">
                        Inscription
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalConnexion" aria-modal="true" style="position: fixed;" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        S'inscrire
                    </h5>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate">
                        <div class="form-group">
                            <label class="form-label">
                                Full Name
                            </label>
                            <div class="form-control-wrap">
                                <input data-msg="Error message" class="form-control" id="full-name1" required="" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">
                                Email address
                            </label>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input data-msg="Error message" required type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Entrer votre Mot de passe">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-mw btn-dim btn-outline-danger" type="reset" data-bs-dismiss="modal">
                                Annulée
                            </button>
                            <button class="btn btn-mw btn-dim btn-outline-success" type="submit">
                                Connexion
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">
                        Connexion
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAnnonce" aria-modal="true" style="position: fixed;" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
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
                                        <input required data-msg="Error message" class="form-control" id="full-name-1" type="text" />
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
                                        Annulée
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

    <script src="{{asset('assets/js/bundle55a0.js')}}">
    </script>
    <script src="{{asset('assets/js/scripts55a0.js')}}">
    </script>
    <script src="{{asset('assets/js/demo-settings55a0.js')}}">
    </script>
    <script src="{{asset('assets/js/charts/gd-campaign55a0.js')}}">
    </script>
</body>


</html>