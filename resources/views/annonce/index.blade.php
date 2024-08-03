@extends('app')

@section('titre', 'Annonces')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
                                Annonces
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="nk-block">
                <ul class="filter-button-group mb-4 pb-1">
                    <li>
                        <button class="filter-button active" data-filter="*" type="button">
                            Tout
                        </button>
                    </li>
                    <li>
                        <button class="filter-button" data-filter=".categorie-1" type="button">
                            TELEPHONES & TABLETTES
                        </button>
                    </li>
                    <li>
                        <button class="filter-button" data-filter=".categorie-2" type="button">
                            INFORMATIQUES
                        </button>
                    </li>
                    <li>
                        <button class="filter-button" data-filter=".categorie-3" type="button">
                            VEHICULES
                        </button>
                    </li>
                    <li>
                        <button class="filter-button" data-filter=".categorie-4" type="button">
                            ELECTRONIQUES
                        </button>
                    </li>
                    <li>
                        <button class="filter-button" data-filter=".categorie-5" type="button">
                            IMMOBILIERS
                        </button>
                    </li>
                </ul>
                <div class="row g-gs filter-container" data-animation="true">

                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 filter-item categorie-1" data-category="categorie-1">
                        <div class="card ">
                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: 160px; width:auto;" class="" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-danger" >
                                            <em class="icon ni ni-hot"></em>
                                            <span>Pro</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-inner text-center pt-2 pb-2">
                                <ul class="product-tags">
                                    <li>
                                        <a>
                                            <em class="icon ni ni-map-pin-fill"></em>
                                            <span>Abidjan</span>
                                        </a>
                                    </li>
                                </ul>
                                <h6 class="product-title text-dark fs-15px">
                                    <a href="{{route('index_detail')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-15px ">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 filter-item categorie-2" data-category="categorie-2">
                        <div class="card ">
                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: 160px; width:auto;" class="" src="image/mtn/1.png" />
                                </a>
                            </div>
                            <div class="card-inner text-center pt-2 pb-2">
                                <ul class="product-tags">
                                    <li>
                                        <a>
                                            <em class="icon ni ni-map-pin-fill"></em>
                                            <span>Abidjan</span>
                                        </a>
                                    </li>
                                </ul>
                                <h6 class="product-title text-dark fs-15px">
                                    <a href="{{route('index_detail')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-15px ">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> --}}

            <div class="nk-block">
                <div class="card card-preview">
                    <div class="card-inner">
                        <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col ">
                                        N°
                                    </th>
                                    <th class="nk-tb-col"><span class="sub-text">User</span></th>
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Prix</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Last Login</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col ">
                                        1
                                    </td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-sm-flex">
                                                <img src="images/product/a.png" alt="" class="thumb">
                                            </div>
                                            <div class="user-info"><span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span><span>info@softnio.com</span></div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-mb">
                                        <span class="tb-amount">
                                            1.000.000
                                            <span class="me-1 currency">Fcfa</span>
                                        </span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md"><span>+811 847-4958</span></td>
                                    <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                            <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                                        </ul>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg"><span>05 Oct 2019</span></td>
                                    <td class="nk-tb-col tb-col-md"><span class="tb-status text-success">Active</span></td>
                                    <td class="nk-tb-col ">
                                        <a href="" class="btn btn-white btn-dim btn-outline-warning d-none d-md-inline-flex">
                                            <em class="icon ni ni-eye"></em>
                                            <span>Détail</span>
                                        </a>
                                        <a href="" class="btn btn-icon btn-white btn-dim btn-outline-warning d-inline-flex d-md-none">
                                            <em class="icon ni ni-eye"></em>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade zoom" tabindex="-1" id="modalSearch">
    <div class="modal-dialog modal-sm" role="document" style="width: 100%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Recherche</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
            </div>
            <div class="modal-body ">
                <form action="#" class="form-validate row g-gs">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics1">
                                Localisation
                            </label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" data-search="on" data-placeholder="Selectionner">
                                    <option label="empty" value="">
                                    </option>
                                    <option value="fv-gq">
                                        General Question
                                    </option>
                                    <option value="fv-tq">
                                        Tachnical Question
                                    </option>
                                    <option value="fv-ab">
                                        Account & Billing
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics2">
                                Catégorie
                            </label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" id="rech_categorie" data-placeholder="Selectionner">
                                    <option value="">
                                    </option>
                                    <option value="immobilier">
                                        Immobilier
                                    </option>
                                    <option value="vehicule">
                                        Véhicule
                                    </option>
                                    <option value="autre">
                                        Autre
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="rech_autre">
                            <label class="form-label" for="fv-topic3">
                                Type
                            </label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" data-search="on" data-placeholder="Selectionner">
                                    <option label="empty" value="">
                                    </option>
                                    <option value="fv-gq">
                                        General Question
                                    </option>
                                    <option value="fv-tq">
                                        Tachnical Question
                                    </option>
                                    <option value="fv-ab">
                                        Account & Billing
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="rech_immobilier" style="display:none;">
                            <label class="form-label" for="fv-topic3">
                                Type d'immobilier
                            </label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" data-search="on" data-placeholder="Selectionner">
                                    <option label="empty" value="">
                                    </option>
                                    <option value="fv-gq">
                                        General Question
                                    </option>
                                    <option value="fv-tq">
                                        Tachnical Question
                                    </option>
                                    <option value="fv-ab">
                                        Account & Billing
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="rech_vehicule" style="display:none;">
                            <label class="form-label" for="fv-topic3">
                                Type de véhicule
                            </label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" data-placeholder="Selectionner">
                                    <option label="empty" value="">
                                    </option>
                                    <option value="fv-gq">
                                        General Question
                                    </option>
                                    <option value="fv-tq">
                                        Tachnical Question
                                    </option>
                                    <option value="fv-ab">
                                        Account & Billing
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" id="rech_marque" style="display:none;">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics2">
                                Marque
                            </label>
                            <div class="form-control-wrap ">
                                <select class="form-select js-select2" data-search="on" data-placeholder="Selectionner">
                                    <option label="empty" value="">
                                    </option>
                                    <option value="fv-gq">
                                        General Question
                                    </option>
                                    <option value="fv-tq">
                                        Tachnical Question
                                    </option>
                                    <option value="fv-ab">
                                        Account & Billing
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" id="rech_annee" style="display:none;">
                        <div class="form-group">
                            <label class="form-label" for="cp1-team-size">Année</label>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" data-search="on" id="vehiculeSelect" data-placeholder="selectionner">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" id="rech_km" style="display:none;">
                        <div class="form-group">
                            <label class="form-label" for="fv-topic3">
                                Kilométrage
                            </label>
                            <div class="form-control-wrap">
                                <div class="input-group">
                                    <input id="min-price" placeholder="min" type="tel" class="form-control">
                                    <input id="max-price" placeholder="max" type="tel" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="fv-topic3">
                                Prix ( Fcfa )
                            </label>
                            <div class="form-control-wrap">
                                <div class="input-group">
                                    <input id="min-price" placeholder="min" type="tel" class="form-control">
                                    <input id="max-price" placeholder="max" type="tel" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="form-group">
                            <button type="submit" class="btn btn-white btn-md btn-dim btn-outline-success ">
                                <span>Recherche</span>
                                <em class="icon ni ni-search"></em>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


