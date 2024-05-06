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
    <link href="assets/css/dashlite55a0.css" rel="stylesheet">
    <link href="assets/css/theme55a0.css" id="skin-default" rel="stylesheet">
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
            <div class="nk-wrap ">
                <div class="nk-header is-light nk-header-fixed is-light">
                    <div class="container-xl wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand ">
                                <a class="logo-link" href="{{route('index_accueil')}}">
                                    <img height="50" width="50" src="{{asset('image/1.png')}}" /></img>
                                </a>
                            </div>
                            <div class="nk-header-menu is-light">
                                <div class="nk-header-menu-inner">
                                    
                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    @yield('option_btn')
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
                                                        <a href="user-profile-setting.html">
                                                            <em class="icon ni ni-package-fill">
                                                            </em>
                                                            <span>
                                                                Poster une annonce
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="user-profile-setting.html">
                                                            <em class="icon ni ni-inbox-in">
                                                            </em>
                                                            <span>
                                                                Mes annonces
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
                            <div class="nk-footer-copyright">
                                © <script>
                                document.write(new Date().getFullYear())
                                </script>. DealExpress
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSincrire">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        S'inscrire
                    </h5>
                    <a aria-label="Close" class="close" data-bs-dismiss="modal" href="#">
                        <em class="icon ni ni-cross">
                        </em>
                    </a>
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
                            <button class="btn btn-lg btn-primary" type="submit">
                                Save Informations
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">
                        Modal Footer Text
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalConnexion">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        S'inscrire
                    </h5>
                    <a aria-label="Close" class="close" data-bs-dismiss="modal" href="#">
                        <em class="icon ni ni-cross">
                        </em>
                    </a>
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
                            <button class="btn btn-lg btn-primary" type="submit">
                                Save Informations
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">
                        Modal Footer Text
                    </span>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/bundle55a0.js">
    </script>
    <script src="assets/js/scripts55a0.js">
    </script>
    <script src="assets/js/demo-settings55a0.js">
    </script>
    <script src="assets/js/charts/gd-campaign55a0.js">
    </script>
</body>


</html>