@extends('app')

@section('titre', 'Profil')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="card">
                    <div class="card-aside-wrap">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">
                                            Informations Personnelles
                                        </h4>
                                        <div class="nk-block-des">
                                            <p>
                                                Informations de base, telles que votre nom et votre adresse ..., que vous utilisez sur la plateforme
                                            </p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content align-self-start">
                                        <a class="btn btn-white btn-outline-warning btn-dim btn-sm mt-n1" data-bs-target="#profile-edit" data-bs-toggle="modal">
                                            <span>Mise à jour</span>
                                            <em class="icon ni ni-edit"></em>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">
                                            Informations personnelles
                                        </h6>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Nom
                                            </span>
                                            <span class="data-value">
                                                Abu Bin Ishtiyak
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-lock-alt">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Prénoms
                                            </span>
                                            <span class="data-value">
                                                Ishtiyak
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-lock-alt">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Email
                                            </span>
                                            <span class="data-value">
                                                info@softnio.com
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-lock-alt">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Contact
                                            </span>
                                            <span class="data-value text-soft">
                                                0585782723
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-lock-alt">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Date de naissance
                                            </span>
                                            <span class="data-value">
                                                29 Feb, 1986
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-lock-alt">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="data-item" data-bs-target="#profile-edit" data-bs-toggle="modal" data-tab-target="#address">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Adresse
                                            </span>
                                            <span class="data-value">
                                                2337 Kildeer Drive,
                                                <br>
                                                Kentucky, Canada
                                                </br>
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-lock-alt">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">
                                            Préférences
                                        </h6>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Language
                                            </span>
                                            <span class="data-value">
                                                English (United State)
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <a class="link link-primary" href="#">
                                                Change Language
                                            </a>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Date Format
                                            </span>
                                            <span class="data-value">
                                                M d, YYYY
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <a class="link link-primary" href="#">
                                                Change
                                            </a>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Timezone
                                            </span>
                                            <span class="data-value">
                                                Bangladesh (GMT +6)
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <a class="link link-primary" href="#">
                                                Change
                                            </a>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">
                                            Sécurité
                                        </h6>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <div class="nk-block-text data-label">
                                                <h6>
                                                    Changer le mot de passe
                                                </h6>
                                                <p>
                                                    Définissez un mot de passe unique pour protéger votre compte.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="nk-block-actions data-col data-col-end">
                                            <a class="btn btn-primary" href="#">
                                                Changer
                                            </a>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <div class="nk-block-text data-label">
                                                <h6>
                                                    Sauvegarder mes journaux d'activité
                                                </h6>
                                                <p>
                                                    Vous pouvez sauvegarder tous vos journaux d'activité, y compris les activités inhabituelles détectées.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="nk-block-actions data-col data-col-end">
                                            <ul class="align-center gx-3">
                                                <li class="order-md-last">
                                                    <div class="custom-control custom-switch me-n2">
                                                        <input checked="" class="custom-control-input" id="activity-log2" type="checkbox">
                                                        <label class="custom-control-label" for="activity-log2">
                                                        </label>
                                                        </input>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <div class="nk-block-text data-label">
                                                <h6>
                                                    Authentification à deux facteurs
                                                    <span class="badge badge-success ms-0">
                                                        Activé
                                                    </span>
                                                </h6>
                                                <p>
                                                    Sécurisez votre compte avec la sécurité 2FA. Lorsque celle-ci est activée, vous devrez entrer non seulement votre mot de passe, mais également un code spécial via une application. Vous pouvez recevoir ce code via une application mobile.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="nk-block-actions data-col data-col-end">
                                            <a class="btn btn-danger" href="#">
                                                <span>Désactivé</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="profile-edit" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a class="close" data-bs-dismiss="modal" href="#">
                <em class="icon ni ni-cross-sm">
                </em>
            </a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">
                    Mise à jour du Profil
                </h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personal">
                            Personnelle
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#address">
                            Adresse
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">
                                        Nom
                                    </label>
                                    <input class="form-control form-control-lg" id="full-name" placeholder="Enter Full name" type="text" value="Abu Bin Ishtiyak" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">
                                        Prénoms
                                    </label>
                                    <input class="form-control form-control-lg" id="display-name" placeholder="Enter display name" type="text" value="Ishtiyak" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">
                                        Contact
                                    </label>
                                    <input class="form-control form-control-lg" id="phone-no" placeholder="Phone Number" type="text" value="+880" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">
                                        Date de naissance
                                    </label>
                                    <input class="form-control form-control-lg date-picker" id="birth-day" placeholder="Enter your birth date" type="text" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input" id="latest-sale" type="checkbox">
                                    <label class="custom-control-label" for="latest-sale">
                                        Use full name to display
                                    </label>
                                    </input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="address">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">
                                        Address Line 1
                                    </label>
                                    <input class="form-control form-control-lg" id="address-l1" type="text" value="2337 Kildeer Drive" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l2">
                                        Address Line 2
                                    </label>
                                    <input class="form-control form-control-lg" id="address-l2" type="text" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">
                                        State
                                    </label>
                                    <input class="form-control form-control-lg" id="address-st" type="text" value="Kentucky" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-county">
                                        Country
                                    </label>
                                    <select class="form-select js-select2" data-ui="lg" id="address-county">
                                        <option>
                                            Canada
                                        </option>
                                        <option>
                                            United State
                                        </option>
                                        <option>
                                            United Kindom
                                        </option>
                                        <option>
                                            Australia
                                        </option>
                                        <option>
                                            India
                                        </option>
                                        <option>
                                            Bangladesh
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-gs align-items-center justify-content-center mt-3">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-white btn-lg btn-dim btn-outline-success btn-block">
                            <span>Enregistrer</span>
                            <em class="icon ni ni-arrow-right-circle"></em>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


