@extends('app')

@section('titre', 'Tableau de bord')

@section('menu')
<div class="nk-sidebar is-light nk-sidebar-fixed " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a class="logo-link nk-sidebar-logo" href="{{route('index_accueil')}}">
                <img height="50" width="50" src="{{asset('image/1.png')}}" /></img>
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
                <em class="icon ni ni-arrow-left"></em>
            </a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar="">
                <ul class="nk-menu">
                	<li class="nk-menu-item">
					    <a class="nk-menu-link" href="#">
					        <span class="nk-menu-icon">
					            <em class="icon ni ni-trend-up">
					            </em>
					        </span>
					        <span class="nk-menu-text">
					            Tableau de bord
					        </span>
					    </a>
					</li>
                    <li class="nk-menu-item has-sub">
                        <a class="nk-menu-link nk-menu-toggle" href="#">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-plus-circle">
                                </em>
                            </span>
                            <span class="nk-menu-text">
                                Nouvel enregistrement
                            </span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a class="nk-menu-link" href="#">
                                    <span class="nk-menu-text">
                                        Catégorie
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a class="nk-menu-link" href="#">
                                    <span class="nk-menu-text">
                                        Sous catégorie
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a class="nk-menu-link" href="#">
                                    <span class="nk-menu-text">
                                        Ville
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a class="nk-menu-link" href="#">
                                    <span class="nk-menu-text">
                                        Commune
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a class="nk-menu-link" href="#">
                                    <span class="nk-menu-text">
                                        Dragula
                                    </span>
                                    <span class="nk-menu-badge">
                                        New
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('btn_menu')
<div class="nk-menu-trigger d-xl-none ms-n1 me-3">
    <a class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu" href="#">
        <em class="icon ni ni-menu">
        </em>
    </a>
</div>
@endsection

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block-head nk-page-head nk-block-head-sm">
                <div class="nk-block-head-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">
                            Bienvenue!
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
		                        <div class="row pb-5">
		                            <div class="col-lg-12 ">
		                            	<h5 class="product-title">
		                                    Annonces les plus vues (Top 10)
		                                </h5>
		                                <div class="slider-init row product-slider mb-3" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
		                                    <div class="col">
		                                        <div class="card ">
						                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
						                                <a href="{{route('index_detail')}} " >
						                                    <img style="object-fit: cover;height: auto;width: auto;" class="" src="image/1.png" />
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
						                                    <img style="object-fit: cover;height: auto;width: auto;" class="" src="image/1.png" />
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
						                                    <img style="object-fit: cover;height: auto;width: auto;" class="" src="image/1.png" />
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
						                                    <img style="object-fit: cover;height: auto;width: auto;" class="" src="image/1.png" />
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
						                                    <img style="object-fit: cover;height: auto;width: auto;" class="" src="image/1.png" />
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
						                                    <img style="object-fit: cover;height: auto;width: auto;" class="" src="image/1.png" />
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
						                                    <img style="object-fit: cover;height: auto;width: auto;" class="" src="image/1.png" />
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
						                                    <img style="object-fit: cover;height: auto;width: auto;" class="" src="image/1.png" />
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection