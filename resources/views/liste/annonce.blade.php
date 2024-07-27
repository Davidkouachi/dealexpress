@extends('app')

@section('titre', 'Mes annonces')

@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
                                Mes annonces
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
                        <button class="filter-button" data-filter=".vendu" type="button">
                            Vendu
                        </button>
                    </li>
                    <li>
                        <button class="filter-button" data-filter=".en_ligne" type="button">
                            En ligne
                        </button>
                    </li>
                </ul>
                <div class="row g-gs filter-container" data-animation="true">
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 filter-item vendu" data-category="vendu">
                        <div class="card ">
                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
                                <a href="{{route('index_liste_detail')}} " >
                                    <img style="object-fit: cover;height: 200px;" class="" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-success" >
                                            <em class="icon ni ni-check-circle-cut"></em>
                                            <span>vendu</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-inner text-center pt-2 pb-2">
                                <ul class="product-tags">
                                    <li>
                                        <a>
                                            <em class="icon ni ni-map-pin-fill"></em>
                                            <span>Abidjan, </span>
                                        </a>
                                        <a>
                                            <em class="icon ni ni-eye"></em>
                                            <span>15 vue(s)</span>
                                        </a>
                                    </li>
                                </ul>
                                <h6 class="product-title text-dark fs-15px">
                                    <a href="{{route('index_liste_detail')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-17px ">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 filter-item en_ligne" data-category="en_ligne">
                        <div class="card ">
                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
                                <a href="{{route('index_liste_detail')}} " >
                                    <img style="object-fit: cover;height: 200px;" class="" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-warning" >
                                            <em class="icon ni ni-loader"></em>
                                            <span>en ligne</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-inner text-center pt-2 pb-2">
                                <ul class="product-tags">
                                    <li>
                                        <a>
                                            <em class="icon ni ni-map-pin-fill"></em>
                                            <span>Abidjan, </span>
                                        </a>
                                        <a>
                                            <em class="icon ni ni-eye"></em>
                                            <span>0 vue(s)</span>
                                        </a>
                                    </li>
                                </ul>
                                <h6 class="product-title text-dark fs-15px">
                                    <a href="{{route('index_liste_detail')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-15px ">
                                    19.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
