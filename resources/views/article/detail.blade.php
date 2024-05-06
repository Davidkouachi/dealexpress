@extends('app')

@section('titre', 'Détail')

@section('option_btn')
<li class="dropdown notification-dropdown">
    <a class=" nk-quick-nav-icon" href="{{route('index_accueil')}}">
        <em class="icon ni ni-home"></em>
    </a>
</li>
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
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title ">
                            Détail de l'article
                        </h3>
                    </div>
                    <div class="nk-block-head-content">
                        <a class="btn btn-danger btn-dim d-none d-sm-inline-flex" href="{{route('index_accueil')}}">
                            <em class="icon ni ni-arrow-left"></em>
                            <span>
                                Back
                            </span>
                        </a>
                        <a class="btn btn-danger btn-dim d-inline-flex d-sm-none" href="{{route('index_accueil')}}">
                            <em class="icon ni ni-arrow-left">
                            </em>
                        </a>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="card">
                    <div class="card-inner">
                        <div class="row pb-5">
                            <div class="col-lg-4">
                                <div class="product-gallery me-xl-1 me-xxl-5 mb-5">
                                    <div class="slider-init" data-slick='{"arrows": false, "fade": true, "asNavFor":"#sliderNav", "slidesToShow": 1, "slidesToScroll": 1}' id="sliderFor">
                                        <div class="slider-item rounded">
                                            <img alt="" class="rounded w-100" src="images/product/lg-a.jpg" />
                                        </div>
                                        <div class="slider-item rounded">
                                            <img alt="" class="rounded w-100" src="images/product/lg-g.jpg" />
                                        </div>
                                        <div class="slider-item rounded">
                                            <img alt="" class="rounded w-100" src="images/product/lg-d.jpg" />
                                        </div>
                                        <div class="slider-item rounded">
                                            <img alt="" class="rounded w-100" src="images/product/lg-h.jpg" />
                                        </div>
                                        <div class="slider-item rounded">
                                            <img alt="" class="rounded w-100" src="images/product/lg-e.jpg" />
                                        </div>
                                    </div>
                                    <div class="slider-init slider-nav" data-slick='{"arrows": false, "slidesToShow": 5, "slidesToScroll": 1, "asNavFor":"#sliderFor", "centerMode":true, "focusOnSelect": true,                                 "responsive":[ {"breakpoint": 1539,"settings":{"slidesToShow": 4}}, {"breakpoint": 768,"settings":{"slidesToShow": 3}}, {"breakpoint": 420,"settings":{"slidesToShow": 2}} ]                            }' id="sliderNav">
                                        <div class="slider-item">
                                            <div class="thumb">
                                                <img alt="" class="rounded" src="images/product/lg-a.jpg" />
                                            </div>
                                        </div>
                                        <div class="slider-item">
                                            <div class="thumb">
                                                <img alt="" class="rounded" src="images/product/lg-g.jpg" />
                                            </div>
                                        </div>
                                        <div class="slider-item">
                                            <div class="thumb">
                                                <img alt="" class="rounded" src="images/product/lg-d.jpg" />
                                            </div>
                                        </div>
                                        <div class="slider-item">
                                            <div class="thumb">
                                                <img alt="" class="rounded" src="images/product/lg-h.jpg" />
                                            </div>
                                        </div>
                                        <div class="slider-item">
                                            <div class="thumb">
                                                <img alt="" class="rounded" src="images/product/lg-e.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="product-price text-primary">
                                    $78.00
                                </h5>
                                <h5 class="product-title">
                                    Classy Modern Smart watch
                                </h5>
                            </div>
                            <div class="col-lg-8">
                                <div class="product-details entry me-xxl-3">
                                    <h3>
                                        Product details of Comfy cushions
                                    </h3>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem consectetur, adipisci velit.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                                    </p>
                                    <ul class="list list-sm list-checked">
                                        <li>
                                            Meets and/or exceeds performance standards.
                                        </li>
                                        <li>
                                            Liumbar support.
                                        </li>
                                        <li>
                                            Made of bonded teather and poiyurethane.
                                        </li>
                                        <li>
                                            Metal frame.
                                        </li>
                                        <li>
                                            Anatomically shaped cork-latex
                                        </li>
                                        <li>
                                            As attractively priced as you look attractive in one
                                        </li>
                                    </ul>
                                    <p>
                                        Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
                                    </p>
                                    <h3>
                                        The best seats in the house
                                    </h3>
                                    <p>
                                        I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
                                    </p>
                                    <a class="btn btn-outline-success btn-dim" href="{{route('index_article')}}" data-bs-toggle="modal" data-bs-target="#modalContact">
                                        <span>Contact</span>
                                        <em class="icon ni ni-call-alt-fill"></em>
                                    </a>
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
                                Quelques articles
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="slider-init row product-slider" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
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
            </div>
        </div>
    </div>
</div>

<div class="modal fade zoom" tabindex="-1" id="modalContact">
    <div class="modal-dialog modal-sm" role="document" style="width: 100%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Contacts</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
            </div>
            <div class="modal-body ">
                <div class="card-inner text-center" >
                    <ul class="row g-gs text-center">
                        <li class="col-lg-12">
                            <a class="btn btn-outline-warning btn-dim" >
                                <em class="icon ni ni-call"></em>
                                <span> (+225) 0102514392 </span>
                            </a>
                        </li>
                        <li class="col-lg-12">
                            <a class="btn btn-outline-success btn-dim" >
                                <em class="icon ni ni-whatsapp"></em>
                                <span> (+225) 0102514392 </span>
                            </a>
                        </li>
                        <li class="col-lg-12">
                            <a class="btn btn-outline-primary btn-dim" >
                                <em class="icon ni ni-telegram"></em>
                                <span> (+225) 0102514392 </span>
                            </a>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection


