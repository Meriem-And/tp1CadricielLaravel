
@extends('layout')
@section('content')
    <div class="container">
       <h1 class="m-5">Liste des etudiants  </h1>
        <a href="/etudiants/ajouter" class="btn btn-dark">Ajouter un etudiant </a>

        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Phone</th>
                <th scope="col">Date de naissance </th>
                <th scope="col">Ville </th>
                <th scope="col">
                   Action
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($etudiants as $etudiant)
                <tr>
                    <th scope="row">{{$etudiant->etudiant_id}}</th>
                    <td>{{$etudiant->nom}}</td>
                    <td>{{$etudiant->adresse}}</td>
                    <td>{{$etudiant->phone}}</td>
                    <td>{{$etudiant->naissance}}</td>
                    <td>{{$etudiant->ville}}</td>
                    <td>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/etudiants/{{$etudiant->etudiant_id}}">Détails</a></li>
                                <li><a class="dropdown-item" href="/etudiants/modifier/{{$etudiant->etudiant_id}}">Modifier </a></li>
                                <li><a class="dropdown-item" href="/etudiants/supprimer/{{$etudiant->etudiant_id}}">Supprimer</a></li>
                            </ul>
                        </div>

                    </td>

                </tr>
            @empty
                <li>Aucun article</li>
            @endforelse


            </tbody>
        </table>
    </div>


@endsection
