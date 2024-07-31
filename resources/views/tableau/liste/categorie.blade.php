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
                            Catégories
                        </h3>
                    </div>
                </div>
            </div>
            <div class="nk-block">
			    <div class="row g-gs align-items-center justify-content-center">
			        <div class="col-lg-6">
			            <div class="card h-100">
			                <div class="card-inner">
			                    <div class="card-head">
			                        <h5 class="card-title">Formulaire</h5>
			                    </div>
			                    <form id="form" action="{{route('new_categorie')}}" class="" method="post">
			                    	@csrf
			                    	<div class="mb-4" id="categorie_container" >
				                        <div class="form-group">
				                            <div class="form-control-wrap">
				                            	<input name="categorie_new[]" class="form-control" required type="text" oninput="this.value = this.value.toUpperCase()" autocomplete="off" placeholder="Entrer la nom de la catégorie"/>
				                            </div>
				                        </div>
			                        </div>
			                        <div class="form-group row g-gs">
                                        <div class="col-6 text-center">
                                            <a class="btn btn-mw btn-dim btn-outline-warning " id="ajouter_categorie">
                                                <em class="icon ni ni-plus-circle"></em>
                                                <span>Ajouter</span>
                                            </a>
                                        </div>
                                        <div class="col-6 text-center">
                                            <button class="btn btn-mw btn-dim btn-outline-success " type="submit">
                                                <span>Sauvgarder</span>
                                                <em class="icon ni ni-arrow-right-circle"></em>
                                            </button>
                                        </div>
                                    </div>
			                    </form>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
            <div class="nk-block">
			    <div class="card card-preview">
			        <div class="card-inner">
			            <table class="datatable-init table">
			                <thead>
			                    <tr>
			                        <th>N°</th>
			                        <th>Catégorie</th>
			                        <th>Nombre de sous-catégorie</th>
			                        <th>
			                        	
			                        </th>
			                    </tr>
			                </thead>
			                <tbody>
			                	@foreach($categories as $key => $categorie)
			                    <tr>
			                        <td>{{$key+1}}</td>
			                        <td>{{$categorie->nom}}</td>
			                        <td>{{$categorie->nbre}}</td>
			                        <td>
			                        	<a href="" class="btn btn-white btn-dim btn-warning btn-sm">
                                            <em class="icon ni ni-edit" ></em>
                                        </a>
                                        <a href="" class="btn btn-white btn-dim btn-danger btn-sm">
                                            <em class="icon ni ni-trash" ></em>
                                        </a>
			                        </td>
			                    </tr>
			                    @endforeach
			                </tbody>
			            </table>
			        </div>
			    </div>
			</div>
        </div>
    </div>
</div>

    <script>
        document.getElementById('ajouter_categorie').addEventListener('click', function(event) {
            event.preventDefault();
            const container = document.getElementById('categorie_container');
            const div = document.createElement('div');
            div.classList.add('form-group');
            div.innerHTML = `
                <div class="row g-gs">
                    <div class="col-lg-12">
                        <div class="form-control-wrap">
                            <input placeholder="Entrer la nom de la catégorie" autocomplete="off" required type="text" class="form-control objectif me-2" name="categorie_new[]" oninput="this.value = this.value.toUpperCase()">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-control-wrap ">
                            <button type="button" class="btn btn-danger btn-dim text-center btn-remove-objectif btn-block">
                                <em class="ni ni-trash me-2"></em>
                                <em>Supprimer</em>
                            </button>
                        </div>
                    </div>
                </div>
            `;
            container.appendChild(div);

            // Ajouter un écouteur d'événement pour supprimer l'objectif
            div.querySelector('.btn-remove-objectif').addEventListener('click', function() {
                container.removeChild(div);
            });
        });
    </script>

@endsection