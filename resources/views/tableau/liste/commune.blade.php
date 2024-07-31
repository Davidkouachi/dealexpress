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
                            Commune
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
			                    <form id="form" action="{{route('new_commune')}}" class="" method="post">
                                    @csrf
			                        <div class="form-group">
                                        <label class="form-label" for="cp1-team-size">Ville</label>
                                        <div class="form-control-wrap">
                                            <select required name="ville_id_new" class="form-select js-select2" data-placeholder="Selectionner">
                                                <option value=""></option>
                                                @foreach($villes as $ville)
                                                    <option value="{{ $ville->id}}">{{ $ville->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4" id="commune_container" >
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">
                                                Commune
                                            </label>
                                            <div class="form-control-wrap">
                                                <input required name="commune_new[]" placeholder="Saisie Obligatoire" class="form-control" id="full-name" required="" type="text" oninput="this.value = this.value.toUpperCase()" />
                                            </div>
                                        </div>
                                    </div>
			                        <div class="form-group row g-gs">
                                        <div class="col-6 text-center">
                                            <a class="btn btn-mw btn-dim btn-outline-warning " id="ajouter_commune">
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
                        <table class="datatable-init-export nowrap table" data-export-title="Export">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Villes</th>
                                    <th>Communes</th>
                                    <th>
                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($communes as $key => $commune)
                                <tr>
                                    <td>{{$key+1}}</td>                                 
                                    <td>{{$commune->ville}}</td>
                                    <td>{{$commune->nom}}</td>
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
        document.getElementById('ajouter_commune').addEventListener('click', function(event) {
            event.preventDefault();
            const container = document.getElementById('commune_container');
            const div = document.createElement('div');
            div.classList.add('form-group');
            div.innerHTML = `
                <div class="row g-gs">
                    <div class="col-lg-12">
                        <div class="form-control-wrap">
                            <input placeholder="Saisie obligatoire" autocomplete="off" required type="text" class="form-control objectif me-2" name="commune_new[]" oninput="this.value = this.value.toUpperCase()">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-control-wrap ">
                            <button type="button" class="btn btn-danger btn-dim text-center btn-remove-commune btn-block">
                                <em class="ni ni-trash me-2"></em>
                                <em>Supprimer</em>
                            </button>
                        </div>
                    </div>
                </div>
            `;
            container.appendChild(div);

            // Ajouter un écouteur d'événement pour supprimer l'objectif
            div.querySelector('.btn-remove-commune').addEventListener('click', function() {
                container.removeChild(div);
            });
        });
    </script>

@endsection