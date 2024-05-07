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


