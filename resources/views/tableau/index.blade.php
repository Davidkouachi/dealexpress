@extends('app')

@section('titre', 'Tableau de bord')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block-head nk-page-head nk-block-head-sm">
                <div class="nk-block-head-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">
                            Tableau de Bord
                        </h3>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-full bg-primary">
                            <div class="card-inner">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="fs-6 text-white text-opacity-75 mb-0">
                                        Words Available
                                    </div>
                                </div>
                                <h5 class="fs-1 text-white">
                                    452
                                    <small class="fs-3">
                                        words
                                    </small>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-full bg-warning">
                            <div class="card-inner">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="fs-6 text-white text-opacity-75 mb-0">
                                        Words Available
                                    </div>
                                </div>
                                <h5 class="fs-1 text-white">
                                    452
                                    <small class="fs-3">
                                        words
                                    </small>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-full bg-danger">
                            <div class="card-inner">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="fs-6 text-white text-opacity-75 mb-0">
                                        Words Available
                                    </div>
                                </div>
                                <h5 class="fs-1 text-white">
                                    452
                                    <small class="fs-3">
                                        words
                                    </small>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-full bg-success">
                            <div class="card-inner">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="fs-6 text-white text-opacity-75 mb-0">
                                        Words Available
                                    </div>
                                </div>
                                <h5 class="fs-1 text-white">
                                    452
                                    <small class="fs-3">
                                        words
                                    </small>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="row g-gs">
                	<div class="col-lg-12">
					    <div class="card">
		                    <div class="card-inner">
		                        <div class="row ">
		                            <div class="col-lg-12 ">
		                            	<h5 class="product-title">
		                                    Annonces les plus vues (Top 10)
		                                </h5>
		                                <div class="slider-init row product-slider mb-3" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
		                                    <div class="col">
		                                        <div class="card ">
						                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
						                                <a href="{{route('index_detail')}} " >
						                                    <img style="object-fit: cover;height: 160px;width: 160px;" class="" src="image/1.png" />
						                                </a>
						                                <ul class="product-badges">
						                                    <li>
						                                        <span class="badge bg-light" >
						                                            <em class="icon ni ni-eye"></em>
						                                            <span>15 vue(s)</span>
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
						                                <div class="product-price h6 fs-17px ">
						                                    10.000 fcfa
						                                </div>
						                            </div>
						                        </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card ">
						                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
						                                <a href="{{route('index_detail')}} " >
						                                    <img style="object-fit: cover;height: 160px;width: 160px;" class="" src="image/1.png" />
						                                </a>
						                                <ul class="product-badges">
						                                    <li>
						                                        <span class="badge bg-light" >
						                                            <em class="icon ni ni-eye"></em>
						                                            <span>15 vue(s)</span>
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
						                                <div class="product-price h6 fs-17px ">
						                                    10.000 fcfa
						                                </div>
						                            </div>
						                        </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card ">
						                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
						                                <a href="{{route('index_detail')}} " >
						                                    <img style="object-fit: cover;height: 160px;width: 160px;" class="" src="image/1.png" />
						                                </a>
						                                <ul class="product-badges">
						                                    <li>
						                                        <span class="badge bg-light" >
						                                            <em class="icon ni ni-eye"></em>
						                                            <span>15 vue(s)</span>
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
						                                <div class="product-price h6 fs-17px ">
						                                    10.000 fcfa
						                                </div>
						                            </div>
						                        </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card ">
						                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
						                                <a href="{{route('index_detail')}} " >
						                                    <img style="object-fit: cover;height: 160px;width: 160px;" class="" src="image/1.png" />
						                                </a>
						                                <ul class="product-badges">
						                                    <li>
						                                        <span class="badge bg-light" >
						                                            <em class="icon ni ni-eye"></em>
						                                            <span>15 vue(s)</span>
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
						                                <div class="product-price h6 fs-17px ">
						                                    10.000 fcfa
						                                </div>
						                            </div>
						                        </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card ">
						                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
						                                <a href="{{route('index_detail')}} " >
						                                    <img style="object-fit: cover;height: 160px;width: 160px;" class="" src="image/1.png" />
						                                </a>
						                                <ul class="product-badges">
						                                    <li>
						                                        <span class="badge bg-light" >
						                                            <em class="icon ni ni-eye"></em>
						                                            <span>15 vue(s)</span>
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
						                                <div class="product-price h6 fs-17px ">
						                                    10.000 fcfa
						                                </div>
						                            </div>
						                        </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card ">
						                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
						                                <a href="{{route('index_detail')}} " >
						                                    <img style="object-fit: cover;height: 160px;width: 160px;" class="" src="image/1.png" />
						                                </a>
						                                <ul class="product-badges">
						                                    <li>
						                                        <span class="badge bg-light" >
						                                            <em class="icon ni ni-eye"></em>
						                                            <span>15 vue(s)</span>
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
						                                <div class="product-price h6 fs-17px ">
						                                    10.000 fcfa
						                                </div>
						                            </div>
						                        </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card ">
						                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
						                                <a href="{{route('index_detail')}} " >
						                                    <img style="object-fit: cover;height: 160px;width: 160px;" class="" src="image/1.png" />
						                                </a>
						                                <ul class="product-badges">
						                                    <li>
						                                        <span class="badge bg-light" >
						                                            <em class="icon ni ni-eye"></em>
						                                            <span>15 vue(s)</span>
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
						                                <div class="product-price h6 fs-17px ">
						                                    10.000 fcfa
						                                </div>
						                            </div>
						                        </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card ">
						                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
						                                <a href="{{route('index_detail')}} " >
						                                    <img style="object-fit: cover;height: 160px;width: 160px;" class="" src="image/1.png" />
						                                </a>
						                                <ul class="product-badges">
						                                    <li>
						                                        <span class="badge bg-light" >
						                                            <em class="icon ni ni-eye"></em>
						                                            <span>15 vue(s)</span>
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
						                                <div class="product-price h6 fs-17px ">
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
					</div>
					<div class="col-lg-12">
					    <div class="card">
		                    <div class="card-inner">
		                        <div class="row">
		                            <div class="col-lg-12 ">
		                            	<h5 class="product-title">
		                                    Articles les plus vendus (Top 10)
		                                </h5>
		                                <div class="slider-init row product-slider mb-3" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 4}},{"breakpoint": 1340,"settings":{"slidesToShow": 3}}, {"breakpoint": 999,"settings":{"slidesToShow": 2}},{"breakpoint": 650,"settings":{"slidesToShow": 1}} ]}'>
		                                    <div class="col">
		                                        <div class="card card-bordered h-100">
	                                                <div class="card-inner">
	                                                    <h5 class="card-title">
	                                                        Reserve Bank of Australia
	                                                    </h5>
	                                                    <ul class="list-plain">
	                                                        <li>
	                                                            <em class="icon ni ni-map-pin">
	                                                            </em>
	                                                            <span>
	                                                                60311 Frankfurt am Main, Australia
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-emails">
	                                                            </em>
	                                                            <span>
	                                                                info@admin.com
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-call">
	                                                            </em>
	                                                            <span>
	                                                                +43 720 884 749
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-clock">
	                                                            </em>
	                                                            <span>
	                                                                Opening Hours - 8.00am to 4.00pm
	                                                            </span>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card card-bordered h-100">
	                                                <div class="card-inner">
	                                                    <h5 class="card-title">
	                                                        Reserve Bank of Australia
	                                                    </h5>
	                                                    <ul class="list-plain">
	                                                        <li>
	                                                            <em class="icon ni ni-map-pin">
	                                                            </em>
	                                                            <span>
	                                                                60311 Frankfurt am Main, Australia
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-emails">
	                                                            </em>
	                                                            <span>
	                                                                info@admin.com
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-call">
	                                                            </em>
	                                                            <span>
	                                                                +43 720 884 749
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-clock">
	                                                            </em>
	                                                            <span>
	                                                                Opening Hours - 8.00am to 4.00pm
	                                                            </span>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card card-bordered h-100">
	                                                <div class="card-inner">
	                                                    <h5 class="card-title">
	                                                        Reserve Bank of Australia
	                                                    </h5>
	                                                    <ul class="list-plain">
	                                                        <li>
	                                                            <em class="icon ni ni-map-pin">
	                                                            </em>
	                                                            <span>
	                                                                60311 Frankfurt am Main, Australia
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-emails">
	                                                            </em>
	                                                            <span>
	                                                                info@admin.com
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-call">
	                                                            </em>
	                                                            <span>
	                                                                +43 720 884 749
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-clock">
	                                                            </em>
	                                                            <span>
	                                                                Opening Hours - 8.00am to 4.00pm
	                                                            </span>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card card-bordered h-100">
	                                                <div class="card-inner">
	                                                    <h5 class="card-title">
	                                                        Reserve Bank of Australia
	                                                    </h5>
	                                                    <ul class="list-plain">
	                                                        <li>
	                                                            <em class="icon ni ni-map-pin">
	                                                            </em>
	                                                            <span>
	                                                                60311 Frankfurt am Main, Australia
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-emails">
	                                                            </em>
	                                                            <span>
	                                                                info@admin.com
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-call">
	                                                            </em>
	                                                            <span>
	                                                                +43 720 884 749
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-clock">
	                                                            </em>
	                                                            <span>
	                                                                Opening Hours - 8.00am to 4.00pm
	                                                            </span>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card card-bordered h-100">
	                                                <div class="card-inner">
	                                                    <h5 class="card-title">
	                                                        Reserve Bank of Australia
	                                                    </h5>
	                                                    <ul class="list-plain">
	                                                        <li>
	                                                            <em class="icon ni ni-map-pin">
	                                                            </em>
	                                                            <span>
	                                                                60311 Frankfurt am Main, Australia
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-emails">
	                                                            </em>
	                                                            <span>
	                                                                info@admin.com
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-call">
	                                                            </em>
	                                                            <span>
	                                                                +43 720 884 749
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-clock">
	                                                            </em>
	                                                            <span>
	                                                                Opening Hours - 8.00am to 4.00pm
	                                                            </span>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card card-bordered h-100">
	                                                <div class="card-inner">
	                                                    <h5 class="card-title">
	                                                        Reserve Bank of Australia
	                                                    </h5>
	                                                    <ul class="list-plain">
	                                                        <li>
	                                                            <em class="icon ni ni-map-pin">
	                                                            </em>
	                                                            <span>
	                                                                60311 Frankfurt am Main, Australia
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-emails">
	                                                            </em>
	                                                            <span>
	                                                                info@admin.com
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-call">
	                                                            </em>
	                                                            <span>
	                                                                +43 720 884 749
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-clock">
	                                                            </em>
	                                                            <span>
	                                                                Opening Hours - 8.00am to 4.00pm
	                                                            </span>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card card-bordered h-100">
	                                                <div class="card-inner">
	                                                    <h5 class="card-title">
	                                                        Reserve Bank of Australia
	                                                    </h5>
	                                                    <ul class="list-plain">
	                                                        <li>
	                                                            <em class="icon ni ni-map-pin">
	                                                            </em>
	                                                            <span>
	                                                                60311 Frankfurt am Main, Australia
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-emails">
	                                                            </em>
	                                                            <span>
	                                                                info@admin.com
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-call">
	                                                            </em>
	                                                            <span>
	                                                                +43 720 884 749
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-clock">
	                                                            </em>
	                                                            <span>
	                                                                Opening Hours - 8.00am to 4.00pm
	                                                            </span>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card card-bordered h-100">
	                                                <div class="card-inner">
	                                                    <h5 class="card-title">
	                                                        Reserve Bank of Australia
	                                                    </h5>
	                                                    <ul class="list-plain">
	                                                        <li>
	                                                            <em class="icon ni ni-map-pin">
	                                                            </em>
	                                                            <span>
	                                                                60311 Frankfurt am Main, Australia
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-emails">
	                                                            </em>
	                                                            <span>
	                                                                info@admin.com
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-call">
	                                                            </em>
	                                                            <span>
	                                                                +43 720 884 749
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-clock">
	                                                            </em>
	                                                            <span>
	                                                                Opening Hours - 8.00am to 4.00pm
	                                                            </span>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card card-bordered h-100">
	                                                <div class="card-inner">
	                                                    <h5 class="card-title">
	                                                        Reserve Bank of Australia
	                                                    </h5>
	                                                    <ul class="list-plain">
	                                                        <li>
	                                                            <em class="icon ni ni-map-pin">
	                                                            </em>
	                                                            <span>
	                                                                60311 Frankfurt am Main, Australia
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-emails">
	                                                            </em>
	                                                            <span>
	                                                                info@admin.com
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-call">
	                                                            </em>
	                                                            <span>
	                                                                +43 720 884 749
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-clock">
	                                                            </em>
	                                                            <span>
	                                                                Opening Hours - 8.00am to 4.00pm
	                                                            </span>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
		                                    </div>
		                                    <div class="col">
		                                        <div class="card card-bordered h-100">
	                                                <div class="card-inner">
	                                                    <h5 class="card-title">
	                                                        Reserve Bank of Australia
	                                                    </h5>
	                                                    <ul class="list-plain">
	                                                        <li>
	                                                            <em class="icon ni ni-map-pin">
	                                                            </em>
	                                                            <span>
	                                                                60311 Frankfurt am Main, Australia
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-emails">
	                                                            </em>
	                                                            <span>
	                                                                info@admin.com
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-call">
	                                                            </em>
	                                                            <span>
	                                                                +43 720 884 749
	                                                            </span>
	                                                        </li>
	                                                        <li>
	                                                            <em class="icon ni ni-clock">
	                                                            </em>
	                                                            <span>
	                                                                Opening Hours - 8.00am to 4.00pm
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
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection