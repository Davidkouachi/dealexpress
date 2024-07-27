@extends('app')

@section('titre', 'Nouvelle Annonce')

@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block nk-block-lg">
                <form class="nk-block" id="registre" class="" action="" method="post">
                    @csrf
                    <div class="nk-block-head">
                        <div class="nk-block-head-content text-center">
                            <h4 class="nk-block-title">Nouvelle Annonce</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner card-inner-lg">
                                <div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Travail</h4>
                                        </div>
                                    </div>
                                    <div class="row g-gs mb-4" >
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="cp1-team-size">Type de véhicule</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-search="on">
                                                        <option value=""></option>
                                                        <option value="option_select_name">Option select name</option>
                                                        <option value="option_select_name">Option select name</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Année</label>
                                                <div class="form-control-wrap">
                                                    <input autocomplete="off" name="email" type="text" class="form-control form-control-md" id="email" placeholder="Entrer votre Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="cp1-team-size">Marque</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-search="on">
                                                        <option value=""></option>
                                                        <option value="option_select_name">Option select name</option>
                                                        <option value="option_select_name">Option select name</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                           <div class="form-group">
                                                <label class="form-label" for="default-05">Kilométrage</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-text-hint">
                                                        <span class="overline-title">Km</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="default-05" placeholder="Input placeholder">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                           <div class="form-group">
                                                <label class="form-label">Titre</label>
                                                <div class="form-control-wrap">
                                                    <input autocomplete="off" name="email" type="email" class="form-control form-control-md" id="email" placeholder="Entrer votre Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                           <div class="form-group">
                                                <label class="form-label" for="default-05">Prix</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-text-hint">
                                                        <span class="overline-title">Fcfa</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="default-05" placeholder="Input placeholder">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="cp1-team-size">Ville</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-search="on">
                                                        <option value=""></option>
                                                        <option value="option_select_name">Option select name</option>
                                                        <option value="option_select_name">Option select name</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                            <div class="form-group">
                                                <label class="form-label">Hors taxe</label>
                                                <div class="form-group">
                                                    <ul class="custom-control-group g-3 align-center" id="checkboxGroup">
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input name="sms" type="checkbox" class="custom-control-input" id="chat" value="oui">
                                                                <label class="custom-control-label" for="chat">
                                                                    <span>Oui</span>
                                                                </label>
                                                                
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input name="whatsapp" type="checkbox" class="custom-control-input" id="whatsapp" value="oui">
                                                                <label class="custom-control-label" for="whatsapp">
                                                                    <span>Non</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p id="errorMessage" style="color:red; display:none;">Veuillez sélectionner au moins une option.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                            <div class="form-group">
                                                <label class="form-label">Neuf</label>
                                                <div class="form-group">
                                                    <ul class="custom-control-group g-3 align-center" id="checkboxGroup">
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input name="sms" type="checkbox" class="custom-control-input" id="chat" value="oui">
                                                                <label class="custom-control-label" for="chat">
                                                                    <span>Oui</span>
                                                                </label>
                                                                
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input name="whatsapp" type="checkbox" class="custom-control-input" id="whatsapp" value="oui">
                                                                <label class="custom-control-label" for="whatsapp">
                                                                    <span>Non</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p id="errorMessage" style="color:red; display:none;">Veuillez sélectionner au moins une option.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="default-textarea">Description du poste</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control no-resize" id="default-textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="default-textarea">Qualifications requises du poste</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control no-resize" id="default-textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="default-textarea">
                                            Competence
                                        </label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control no-resize" id="default-textarea"></textarea>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="slider-init row product-slider" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 1, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
                                            <div class="col">
                                                <div class="">
                                                    <div class="card h-50" style="display: flex;justify-content: center;align-items: center;border:none;">
                                                        <a>
                                                            <img id="imagePreview1" style="object-fit: cover;height: 150px;" class="" src="" />
                                                        </a>
                                                        <ul class="product-badges" id="btn_image1">
                                                            <li>
                                                                <a class="btn btn-outline-danger btn-dim btn-sm" >
                                                                    <em class="icon ni ni-cross"></em>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-inner pt-2 pb-2"> 
                                                        <input type="file" id="image1" style="width:120px;" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="">
                                                    <div class="card h-50 " style="display: flex;justify-content: center;align-items: center;border:none;">
                                                        <a>
                                                            <img id="imagePreview2" style="object-fit: cover;height: 150px;" class="" src="" />
                                                        </a>
                                                        <ul class="product-badges" id="btn_image2">
                                                            <li>
                                                                <a class="btn btn-outline-danger btn-dim btn-sm" >
                                                                    <em class="icon ni ni-cross"></em>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-inner text-center pt-2 pb-2">
                                                        <input type="file" id="image2" style="width:120px;" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="">
                                                    <div class="card h-50 " style="display: flex;justify-content: center;align-items: center;border:none;">
                                                        <a>
                                                            <img id="imagePreview3" style="object-fit: cover;height: 150px;" class="" src="" />
                                                        </a>
                                                        <ul class="product-badges" id="btn_image3">
                                                            <li>
                                                                <a class="btn btn-outline-danger btn-dim btn-sm" >
                                                                    <em class="icon ni ni-cross"></em>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-inner text-center pt-2 pb-2">
                                                        <input type="file" id="image3" style="width:120px;" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="">
                                                    <div class="card h-50 " style="display: flex;justify-content: center;align-items: center;border:none;">
                                                        <a>
                                                            <img id="imagePreview4" style="object-fit: cover;height: 150px;" class="" src="" />
                                                        </a>
                                                        <ul class="product-badges" id="btn_image4">
                                                            <li>
                                                                <a class="btn btn-outline-danger btn-dim btn-sm" >
                                                                    <em class="icon ni ni-cross"></em>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-inner text-center pt-2 pb-2">
                                                        <input type="file" id="image4" style="width:120px;" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="">
                                                    <div class="card h-50 " style="display: flex;justify-content: center;align-items: center;border:none;">
                                                        <a>
                                                            <img id="imagePreview5" style="object-fit: cover;height: 150px;" class="" src="" />
                                                        </a>
                                                        <ul class="product-badges" id="btn_image5">
                                                            <li>
                                                                <a class="btn btn-outline-danger btn-dim btn-sm" >
                                                                    <em class="icon ni ni-cross"></em>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-inner text-center pt-2 pb-2">
                                                        <input type="file" id="image5" style="width:120px;" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="">
                                                    <div class="card h-50 " style="display: flex;justify-content: center;align-items: center;border:none;">
                                                        <a>
                                                            <img id="imagePreview6" style="object-fit: cover;height: 150px;" class="" src="" />
                                                        </a>
                                                        <ul class="product-badges" id="btn_image6">
                                                            <li>
                                                                <a class="btn btn-outline-danger btn-dim btn-sm" >
                                                                    <em class="icon ni ni-cross"></em>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-inner text-center pt-2 pb-2">
                                                        <input type="file" id="image6" style="width:120px;" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row g-gs align-items-center justify-content-center">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6" >
                                            <button type="reset" class="btn btn-lg btn-dim btn-outline-warning btn-block">
                                                <em class="icon ni ni-cross-circle"></em>
                                                <span>Rémise a zéro</span>
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6" >
                                            <button type="submit" class="btn btn-lg btn-dim btn-outline-success btn-block">
                                                <span>Enregistrer</span>
                                                <em class="icon ni ni-arrow-right-circle"></em>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/app/js/download_image.js') }}"></script>

@endsection