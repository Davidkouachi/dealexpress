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
            <div class="nk-block">
                <ul class="filter-button-group mb-4 pb-1">
                    <li>
                        <button class="filter-button active" data-filter="*" type="button">
                            Tout
                        </button>
                    </li>
                    <li>
                        <button class="filter-button" data-filter=".categorie-1" type="button">
                            categorie-1
                        </button>
                    </li>
                    <li>
                        <button class="filter-button" data-filter=".categorie-2" type="button">
                            categorie-2
                        </button>
                    </li>
                </ul>
                <div class="row g-gs filter-container" data-animation="true">
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 filter-item categorie-1" data-category="categorie-1">
                        <div class="card ">
                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: auto;width: auto;" class="" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-light" >
                                            <em class="icon ni ni-alarm"></em>
                                            <span>il y a 5 jours</span>
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
                                    <li>
                                        <a>
                                            <em class="icon ni ni-bag"></em>
                                            <span>Cap Nord</span>
                                        </a>
                                    </li>
                                </ul>
                                <h6 class="product-title text-dark fs-15px">
                                    <a href="{{route('index_detail')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-15px ">
                                    <small class="text-muted del fs-13px">
                                        35.000 fcfa
                                    </small>
                                    <br>
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 filter-item categorie-2" data-category="categorie-2">
                        <div class="card ">
                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: auto;width: auto;" class="" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-light" >
                                            <em class="icon ni ni-alarm"></em>
                                            <span>il y a 1 jours</span>
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
                                    <li>
                                        <a>
                                            <em class="icon ni ni-bag"></em>
                                            <span>Cap Sud</span>
                                        </a>
                                    </li>
                                </ul>
                                <h6 class="product-title text-dark fs-15px">
                                    <a href="{{route('index_detail')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-15px ">
                                    <small class="text-muted del fs-13px">
                                        55.000 fcfa
                                    </small>
                                    <br>
                                    5.000 fcfa
                                </div>
                            </div>
                        </div>
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
                <form action="#" class="form-validate">
                    <div class="form-group">
                        <label class="form-label" for="fv-topics1">
                            Ville
                        </label>
                        <div class="form-control-wrap ">
                            <select class="form-select js-select2" data-placeholder="Select a option" id="fv-topics1" name="fv-topics1" required="" data-msg="Error message">
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
                    <div class="form-group">
                        <label class="form-label" for="fv-topics2">
                            Catégorie
                        </label>
                        <div class="form-control-wrap ">
                            <select class="form-select js-select2" data-placeholder="Select a option" id="fv-topics2" name="fv-topics2" required="" data-msg="Error message">
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
                    <div class="form-group">
                        <label class="form-label" for="fv-topic3">
                            Sous-catégorie
                        </label>
                        <div class="form-control-wrap ">
                            <select class="form-select js-select2" data-placeholder="Select a option" id="fv-topic3" name="fv-topic3" required="" data-msg="Error message">
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
                    <div class="form-group">
                        <label class="form-label" for="fv-topic3">
                            Prix
                        </label>
                        <div class="form-control-wrap">
                            <div class="input-group">
                                <input id="min-price" placeholder="min" type="text" class="form-control">
                                <input id="max-price" placeholder="max" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-dim btn-outline-success btn-block">
                            <em class="ni ni-search" ></em>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


