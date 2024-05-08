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
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <form action="#" class="form-validate row g-gs">
                                        <div class="col-lg-3 col-md-6" >
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
                                        </div>
                                        <div class="col-lg-3 col-md-6" >
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
                                        </div>
                                        <div class="col-lg-3 col-md-6" >
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
                                        </div>
                                        <div class="col-lg-3 col-md-6" >
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topic3">
                                                    Prix
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
                                                <button type="submit" class="btn btn-lg btn-dim btn-outline-success ">
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
                <div class="nk-block">
                    <div class="row g-gs">

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
                        <div class="card product-card">
                            <div class="product-thumb h-50" style="display: flex;justify-content: center;align-items: center;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: auto;width: auto;" class="card-img-top" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-success">
                                            New
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="card-inner text-center">
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
                                <div class="product-price h6 fs-17px">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb h-50" style="display: flex;justify-content: center;align-items: center;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: auto;width: auto;" class="card-img-top" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-success">
                                            New
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="card-inner text-center">
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
                                <div class="product-price h6 fs-17px">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb h-50" style="display: flex;justify-content: center;align-items: center;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: auto;width: auto;" class="card-img-top" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-success">
                                            New
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="card-inner text-center">
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
                                <div class="product-price h6 fs-17px">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb h-50" style="display: flex;justify-content: center;align-items: center;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: auto;width: auto;" class="card-img-top" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-success">
                                            New
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="card-inner text-center">
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
                                <div class="product-price h6 fs-17px">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb h-50" style="display: flex;justify-content: center;align-items: center;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: auto;width: auto;" class="card-img-top" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-success">
                                            New
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="card-inner text-center">
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
                                <div class="product-price h6 fs-17px">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb h-50" style="display: flex;justify-content: center;align-items: center;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: auto;width: auto;" class="card-img-top" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-success">
                                            New
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="card-inner text-center">
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
                                <div class="product-price h6 fs-17px">
                                    10.000 fcfa
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


