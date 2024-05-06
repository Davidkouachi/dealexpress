@extends('app')

@section('titre', 'Accueil')

@section('option_btn')
<li class="dropdown notification-dropdown">
    <a class="nk-quick-nav-icon" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Articles" href="{{route('index_article')}}">
        <em class="icon ni ni-box-view-fill"></em>
    </a>
</li>
@endsection

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
                            <h5 class="nk-block-title d-flex">
                                Quelques articles
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="slider-init row product-slider mb-2" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="images/product/lg-a.jpg" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-success">
                                            New
                                        </span>
                                    </li>
                                </ul>
                                <ul class="product-actions">
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-cart">
                                            </em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-heart">
                                            </em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-inner text-center">
                                <ul class="product-tags">
                                    <li>
                                        <a href="#">
                                            Smart Watch
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="product-title">
                                    <a href="{{route('index_detail')}}">
                                        Classy 
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    $324
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="images/product/lg-b.jpg" />
                                </a>
                                <ul class="product-actions">
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-cart">
                                            </em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-heart">
                                            </em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-inner text-center">
                                <ul class="product-tags">
                                    <li>
                                        <a href="#">
                                            Vintage Phone
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="product-title">
                                    <a href="{{route('index_detail')}}">
                                        White Vintage telephone
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    $119
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="images/product/lg-c.jpg" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-danger">
                                            Hot
                                        </span>
                                    </li>
                                </ul>
                                <ul class="product-actions">
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-cart">
                                            </em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-heart">
                                            </em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-inner text-center">
                                <ul class="product-tags">
                                    <li>
                                        <a href="#">
                                            Headphone
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="product-title">
                                    <a href="{{route('index_detail')}}">
                                        Black Wireless Headphones
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    $89
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="images/product/lg-d.jpg" />
                                </a>
                                <ul class="product-actions">
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-cart">
                                            </em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-heart">
                                            </em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-inner text-center">
                                <ul class="product-tags">
                                    <li>
                                        <a href="#">
                                            Smart Watch
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="product-title">
                                    <a href="{{route('index_detail')}}">
                                        Modular Smart Watch
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    $120
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="images/product/lg-e.jpg" />
                                </a>
                                <ul class="product-actions">
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-cart">
                                            </em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-heart">
                                            </em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-inner text-center">
                                <ul class="product-tags">
                                    <li>
                                        <a href="#">
                                            Headphones
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="product-title">
                                    <a href="{{route('index_detail')}}">
                                        White Wireless Headphones
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    $78
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <div class="product-thumb">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="images/product/lg-f.jpg" />
                                </a>
                                <ul class="product-actions">
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-cart">
                                            </em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-heart">
                                            </em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-inner text-center">
                                <ul class="product-tags">
                                    <li>
                                        <a href="#">
                                            Phone
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="product-title">
                                    <a href="{{route('index_detail')}}">
                                        Black Android Phone
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    $329
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <a class="btn btn-outline-warning btn-wider btn-dim" href="{{route('index_article')}}">
                                <span>Voir plus</span>
                                <em class="icon ni ni-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


