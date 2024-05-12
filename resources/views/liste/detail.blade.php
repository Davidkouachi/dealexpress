@extends('app')

@section('titre', 'Detail annonce')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title ">
                            Détail de l'annonce
                        </h3>
                    </div>
                    <div class="nk-block-head-content">
                        <a class="btn btn-danger btn-dim d-none d-sm-inline-flex" href="javascript:void(0);" onclick="history.back()">
                            <em class="icon ni ni-arrow-left"></em>
                            <span>
                                Retour
                            </span>
                        </a>
                        <a class="btn btn-danger btn-dim d-inline-flex d-sm-none" href="javascript:void(0);" onclick="history.back()">
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
                            <div class="col-lg-12 ">
                                <div class="slider-init row product-slider mb-3" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
                                    <div class="col">
                                        <div class="card h-100" style="display: flex;justify-content: center;align-items: center;">
                                            <img height="auto" width="auto" src="image/2.jpeg"> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100" style="display: flex;justify-content: center;align-items: center;">
                                            <img height="auto" width="auto" src="image/3.jpeg">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100" style="display: flex;justify-content: center;align-items: center;">
                                            <img height="auto" width="auto" src="image/1.png"> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100" style="display: flex;justify-content: center;align-items: center;">
                                            <img height="auto" width="auto" src="image/2.png"> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100" style="display: flex;justify-content: center;align-items: center;">
                                            <img height="auto" width="auto" src="image/2.jpeg"> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100" style="display: flex;justify-content: center;align-items: center;">
                                            <img height="auto" width="auto" src="image/3.jpeg">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100" style="display: flex;justify-content: center;align-items: center;">
                                            <img height="auto" width="auto" src="image/1.png"> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100" style="display: flex;justify-content: center;align-items: center;">
                                            <img height="auto" width="auto" src="image/2.png"> 
                                        </div>
                                    </div>
                                </div>
                                <h5 class="product-price text-primary">
                                    $78.00
                                </h5>
                                <div class="d-flex">
                                    <h5 class="product-title me-3" >Classy Modern Smart watch</h5>
                                    <p>
                                        <span>15 vue(s)</span>
                                        <em class="icon ni ni-eye" ></em>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
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
                                    <a class="btn btn-outline-info btn-dim mt-2" >
                                        <span>Modifier l'annonce</span>
                                        <em class="icon ni ni-edit"></em>
                                    </a>
                                    <a class="btn btn-outline-danger btn-dim mt-2" >
                                        <span>Supprimer l'annonce</span>
                                        <em class="icon ni ni-trash"></em>
                                    </a>
                                    <a class="btn btn-outline-warning btn-dim mt-2" >
                                        <span>Renouveler l'annonce</span>
                                        <em class="icon ni ni-reload"></em>
                                    </a>
                                    <a class="btn btn-outline-success btn-dim mt-2" >
                                        <span>Article vendu</span>
                                        <em class="icon ni ni-check-circle-cut"></em>
                                    </a>
                                    <a class="btn btn-outline-light btn-dim mt-2" data-bs-toggle="modal" data-bs-target="#modalPartager">
                                        <span>Partager l'annonce</span>
                                        <em class="icon ni ni-share"></em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade zoom" tabindex="-1" id="modalPartager">
    <div class="modal-dialog modal-sm" role="document" style="width: 100%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Partager</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
            </div>
            <div class="modal-body ">
                <div class="card-inner text-center" >
                    <ul class="row g-gs text-center">
                        <li class="col-lg-12">
                            <a class="btn btn-outline-success btn-dim" href="https://wa.me/?text=Votre%20message%20ici%20https://exemple.com" target="_blank" >
                                <em class="icon ni ni-whatsapp"></em>
                                <span>WahtsApp</span>
                            </a>
                        </li>
                        <li class="col-lg-12">
                            <a class="btn btn-outline-primary btn-dim" href="https://www.facebook.com/sharer/sharer.php?u=https://exemple.com" target="_blank">
                                <em class="icon ni ni-facebook-circle"></em>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li class="col-lg-12">
                            <a class="btn btn-outline-warning btn-dim" href="sms:?body=Votre%20message%20ic%20https://exemple.com" target="_blank">
                                <em class="icon ni ni-chat"></em>
                                <span> Sms </span>
                            </a>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection


