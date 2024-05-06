@extends('app')

@section('titre', 'Accueil')

@section('option_btn')
<li class="dropdown notification-dropdown">
    <a class=" nk-quick-nav-icon" data-bs-toggle="modal" data-bs-target="#modalSearch" href="#">
        <em class="icon ni ni-search"></em>
    </a>
</li>
<li class="dropdown notification-dropdown">
    <a class=" nk-quick-nav-icon" href="{{route('index_accueil')}}">
        <em class="icon ni ni-home"></em>
    </a>
</li>
@endsection

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
                                Articles
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row g-gs">
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="card product-card">
                            <div class="product-thumb h-50" style="display: flex;justify-content: center;align-items: center;">
                                <a href="{{route('index_detail')}} " >
                                    <img style="object-fit: cover;height: auto;width: auto;" class="card-img-top" src="images/product/a.png" />
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
                            <hr>
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
                                        Classy Modern Smart watch
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    <small class="text-muted del fs-13px">
                                        $350
                                    </small>
                                    $324
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="card product-card">
                            <div class="product-thumb h-50" style="display: flex; align-items: center; justify-content: center;">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="image/2.jpeg" />
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
                                    <small class="text-muted del fs-13px">
                                        $209
                                    </small>
                                    $119
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
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
                                    <small class="text-muted del fs-13px">
                                        $129
                                    </small>
                                    $89
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
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
                                    <small class="text-muted del fs-13px">
                                        $169
                                    </small>
                                    $120
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
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
                                    <small class="text-muted del fs-13px">
                                        $109
                                    </small>
                                    $78
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
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
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="card product-card">
                            <div class="product-thumb">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="images/product/lg-h.jpg" />
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
                                        Modern Smart watch
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    <small class="text-muted del fs-13px">
                                        $200
                                    </small>
                                    $178
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="card product-card">
                            <div class="product-thumb">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="images/product/lg-g.jpg" />
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
                                            Bundle
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="product-title">
                                    <a href="{{route('index_detail')}}">
                                        Gadget Bundle
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    <small class="text-muted del fs-13px">
                                        $609
                                    </small>
                                    $498
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
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
                                        Classy Modern Smart watch
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    <small class="text-muted del fs-13px">
                                        $350
                                    </small>
                                    $324
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
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
                                    <small class="text-muted del fs-13px">
                                        $209
                                    </small>
                                    $119
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
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
                                    <small class="text-muted del fs-13px">
                                        $129
                                    </small>
                                    $89
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
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
                                    <small class="text-muted del fs-13px">
                                        $169
                                    </small>
                                    $120
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
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
                                    <small class="text-muted del fs-13px">
                                        $109
                                    </small>
                                    $78
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
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
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="card product-card">
                            <div class="product-thumb">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="images/product/lg-h.jpg" />
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
                                        Modern Smart watch
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    <small class="text-muted del fs-13px">
                                        $200
                                    </small>
                                    $178
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="card product-card">
                            <div class="product-thumb">
                                <a href="{{route('index_detail')}}">
                                    <img alt="" class="card-img-top" src="images/product/lg-g.jpg" />
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
                                            Bundle
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="product-title">
                                    <a href="{{route('index_detail')}}">
                                        Gadget Bundle
                                    </a>
                                </h5>
                                <div class="product-price text-primary h5">
                                    <small class="text-muted del fs-13px">
                                        $609
                                    </small>
                                    $498
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
                        <div class="form-control-wrap row">
                            <div class="col-lg-6" >
                                <input placeholder="min" type="tel" class="form-control" id="full-name-1">
                            </div>
                            <div class="col-lg-6" >
                                <input placeholder="max" type="tel" class="form-control" id="full-name-2">
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


