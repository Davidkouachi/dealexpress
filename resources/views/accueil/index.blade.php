@extends('app')

@section('titre', 'Accueil')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            
            <div class="nk-block nk-block-lg">
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-12" >
                            <div class="card card-preview">
                                <div class="card-inner text-center ">
                                   <img height="auto" width="auto" src="image/2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" >
                            <div class="form-group bg-light rounded " style="padding: 15px 10px 0px 10px;">
                                <marquee behavior="" direction="">
                                    <label class="form-label">
                                        <span class="text-danger">
                                            Informations :
                                        </span>
                                        <span class="">
                                            Message
                                        </span>
                                    </label>
                                </marquee>
                            </div>
                        </div>
                        <div class="col-lg-12" >
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <form action="#" class="form-validate row g-gs">
                                        <div class="col-lg-3 col-md-6" >
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topics1">
                                                    Localisation
                                                </label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-select js-select2" data-search="on" data-placeholder="Selectionner" >
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
                                        <div class="col-lg-3 col-md-6" >
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
                                        <div class="col-lg-3 col-md-6" >
                                            <div class="form-group" id="rech_autre">
                                                <label class="form-label" for="fv-topic3">
                                                    Type
                                                </label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-select js-select2" data-placeholder="Selectionner" >
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
                                                    <select class="form-select js-select2" data-search="on" data-placeholder="Selectionner" >
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
                                                    <select class="form-select js-select2" data-placeholder="Selectionner" >
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
                                        <div class="col-lg-3 col-md-6" id="rech_marque" style="display:none;">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topics2">
                                                    Marque
                                                </label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-select js-select2" data-search="on" data-placeholder="Selectionner" >
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
                                        <div class="col-lg-3 col-md-6" id="rech_annee" style="display:none;">
                                            <div class="form-group">
                                                <label class="form-label" for="cp1-team-size">Année</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-search="on" id="vehiculeSelect" data-placeholder="selectionner">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6" id="rech_km" style="display:none;">
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
                                        <div class="col-lg-3 col-md-6" >
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
                                        <div class="col-lg-12 text-center" >
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-white btn-lg btn-dim btn-outline-success ">
                                                    <em class="ni ni-search" ></em>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
                                Quelques annonces
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="slider-init row product-slider" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
                    <div class="col">
                        <div class="card ">
                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: 200px;" class="" src="image/1.png" />
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
                </div>
                <div class="nk-block-head mt-2">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <a class="btn btn-outline-warning btn-white btn-wider btn-dim btn-sm" href="{{route('index_annonce')}}">
                                <span>Voir plus</span>
                                <em class="icon ni ni-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
                                Partenariats
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="slider-init row product-slider" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
                    <div class="col">
                        <div class="card ">
                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
                                <a>
                                    <img style="object-fit: cover;height: 200px;" class="" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-light" >
                                            <em class="icon ni ni-map-pin-fill"></em>
                                            <span>Abidjan</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


