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
                            <div class="form-group bg-danger rounded " style="padding: 15px 10px 0px 10px;">
                                <marquee behavior="" direction="">
                                    <label class="form-label">
                                        <span class="text-white">
                                            Conseils de sécurité :
                                        </span>
                                        <span class="text-white">
                                            1- N'envoyer pas de paiement sans avoir vérifié la produit ou l'identité du vendeur, 2- N'utilisez pas de myens de transfert d'argent, de virement bancaire ou tout autre moyen pour envoyer de l'argent au vendeur, 3- Rencontrer de préference le vendeur dans un lieu public fréquenté.
                                        </span>
                                    </label>
                                </marquee>
                            </div>
                        </div>
                        <div class="col-lg-12" >
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <form action="#" class="form-validate row g-gs">
                                        <div class="col-lg-3 col-md-6" >
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topics1">
                                                    Localisation
                                                </label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-select js-select2" data-placeholder="Selectionner" >
                                                        <option value=""></option>
                                                        @foreach($villes as $ville)
                                                        <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                                        @endforeach
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
                                                    <select class="form-select js-select2" id="categorieSelect" data-placeholder="Selectionner">
                                                        <option value=""></option>
                                                        @foreach($categories as $categorie)
                                                        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6" >
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topic3">
                                                    Sous-Catégorie
                                                </label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-select js-select2" data-placeholder="Selectionner" id="sousCategorieSelect" >
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6" >
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topic3">
                                                    Prix ( Fcfa )
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
                                                <button type="submit" class="btn btn-white btn-lg btn-dim btn-outline-success ">
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

            <div class="nk-block nk-block-lg bg-light rounded p-4 mt-5">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
                                <em class="icon icon-circle bg-primary-dim ni ni-microsoft"></em>
                                <span>Electroniques</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="slider-init row product-slider" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
                    <div class="col">
                        <div class="card">
                            <div class="card h-50" style="display:flex;justify-content:center;align-items:center;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">
                                <a href="{{route('index_detail_electronique')}} " >
                                    <img style="object-fit: cover;height: 160px; width:auto;" class="" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-danger" >
                                            <em class="icon ni ni-hot"></em>
                                            <span>Pro</span>
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
                                <h6 class="product-title text-dark fs-13px">
                                    <a href="{{route('index_detail_electronique')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-13px text-warning ">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card h-50" style="display:flex;justify-content:center;align-items:center;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">
                                <a href="{{route('index_detail_electronique')}} " >
                                    <img style="object-fit: cover;height: 160px; width:auto;" class="" src="image/orange/3.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-danger" >
                                            <em class="icon ni ni-hot"></em>
                                            <span>Pro</span>
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
                                <h6 class="product-title text-dark fs-13px">
                                    <a href="{{route('index_detail_electronique')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-13px text-warning ">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card h-50" style="display:flex;justify-content:center;align-items:center;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">
                                <a href="{{route('index_detail_electronique')}} " >
                                    <img style="object-fit: cover;height: 160px; width:auto;" class="" src="image/orange/3.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-danger" >
                                            <em class="icon ni ni-hot"></em>
                                            <span>Pro</span>
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
                                <h6 class="product-title text-dark fs-13px">
                                    <a href="{{route('index_detail_electronique')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-13px text-warning ">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card h-50" style="display:flex;justify-content:center;align-items:center;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">
                                <a href="{{route('index_detail_electronique')}} " >
                                    <img style="object-fit: cover;height: 160px; width:auto;" class="" src="image/orange/3.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-danger" >
                                            <em class="icon ni ni-hot"></em>
                                            <span>Pro</span>
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
                                <h6 class="product-title text-dark fs-13px">
                                    <a href="{{route('index_detail_electronique')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-13px text-warning ">
                                    90.000.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block-head mt-2">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <a class="btn btn-outline-primary btn-white btn-wider btn-dim btn-sm" href="{{route('index_annonce_electronique')}}">
                                <span>Voir plus</span>
                                <em class="icon ni ni-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block nk-block-lg bg-light rounded p-4 mt-5">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
                                <em class="icon icon-circle bg-primary-dim ni ni-building"></em>
                                <span>Immobiliers</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="slider-init row product-slider" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
                    <div class="col">
                        <div class="card">
                            <div class="card h-50" style="display:flex;justify-content:center;align-items:center;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">
                                <a href="{{route('index_detail_immobilier')}} " >
                                    <img style="object-fit: cover;height: 160px; width:auto;" class="" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-danger" >
                                            <em class="icon ni ni-hot"></em>
                                            <span>Pro</span>
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
                                <h6 class="product-title text-dark fs-13px">
                                    <a href="{{route('index_detail_immobilier')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-13px text-warning ">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block-head mt-2">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <a class="btn btn-outline-primary btn-white btn-wider btn-dim btn-sm" href="{{route('index_annonce_immobilier')}}">
                                <span>Voir plus</span>
                                <em class="icon ni ni-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block nk-block-lg bg-light rounded p-4 mt-5">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
                                <em class="icon icon-circle bg-primary-dim ni ni-mobile"></em>
                                <span>Téléphones & Tablettes</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="slider-init row product-slider" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
                    <div class="col">
                        <div class="card">
                            <div class="card h-50" style="display:flex;justify-content:center;align-items:center;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">
                                <a href="{{route('index_detail_telephone')}} " >
                                    <img style="object-fit: cover;height: 160px; width:auto;" class="" src="image/2.jpeg" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-danger" >
                                            <em class="icon ni ni-hot"></em>
                                            <span>Pro</span>
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
                                <h6 class="product-title text-dark fs-13px">
                                    <a href="{{route('index_detail_telephone')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price text-warning h6 fs-13px ">
                                    90.000.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block-head mt-2">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <a class="btn btn-outline-primary btn-white btn-wider btn-dim btn-sm" href="{{route('index_annonce_telephone')}}">
                                <span>Voir plus</span>
                                <em class="icon ni ni-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block nk-block-lg bg-light rounded p-4 mt-5">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
                                <em class="icon icon-circle bg-primary-dim ni ni-truck"></em>
                                <span>Véhicules</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="slider-init row product-slider" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
                    <div class="col">
                        <div class="card">
                            <div class="card h-50" style="display:flex;justify-content:center;align-items:center;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">
                                <a href="{{route('index_detail_vehicule')}} " >
                                    <img style="object-fit: cover;height: 160px; width:auto;" class="" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-danger" >
                                            <em class="icon ni ni-hot"></em>
                                            <span>Pro</span>
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
                                <h6 class="product-title text-dark fs-13px">
                                    <a href="{{route('index_detail_vehicule')}}">
                                        Classy Modern Smart watch
                                    </a>
                                </h6>
                                <div class="product-price h6 fs-13px text-warning ">
                                    10.000 fcfa
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block-head mt-2">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <a class="btn btn-outline-primary btn-white btn-wider btn-dim btn-sm" href="{{route('index_annonce_vehicule')}}">
                                <span>Voir plus</span>
                                <em class="icon ni ni-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block nk-block-lg bg-light rounded p-4 mt-5">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">
                                Partenariats
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="slider-init row product-slider" data-slick='{"slidesToShow": 5, "centerMode": false, "slidesToScroll": 2, "infinite":false, "adaptiveHeight":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 5}},{"breakpoint": 1240,"settings":{"slidesToShow": 4}}, {"breakpoint": 999,"settings":{"slidesToShow": 3}},{"breakpoint": 650,"settings":{"slidesToShow": 2}} ]}'>
                    <div class="col">
                        <div class="card ">
                            <div class="card h-50" style="display: flex;justify-content: center;align-items: center;">
                                <a>
                                    <img style="object-fit: cover;height: 160px; width:auto;" class="" src="image/1.png" />
                                </a>
                                <ul class="product-badges">
                                    <li>
                                        <span class="badge bg-light" >
                                            <em class="icon ni ni-map-pin-fill"></em>
                                            <span>Abidjan</span>
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

<script src="{{asset('assets/js/app/js/form_rech_para.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('#categorieSelect').on('change', function() {
            var categorieId = $(this).val();
            if (categorieId) {
                $.ajax({
                    url: '/get-subcategories/' + categorieId, // Assurez-vous que cette route existe et renvoie les sous-catégories
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#sousCategorieSelect').empty().append('<option value=""></option>');
                        $.each(data, function(key, value) {
                            $('#sousCategorieSelect').append(
                                '<option value="' + value.id + '">' + value.nom + '</option>'
                            );
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("Erreur :", error);
                    }
                });
            } else {
                $('#sousCategorieSelect').empty().append('<option value=""></option>');
            }
        });
    });
</script>

@endsection


