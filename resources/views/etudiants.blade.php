
@extends('layout')
@section('content')
    <div class="container">
       <h1 class="m-5">@lang('lang.students_list')  </h1>
        <a href="/etudiants/ajouter" class="btn btn-dark">@lang('lang.add_student') </a>

        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">@lang('lang.nom')</th>
                <th scope="col">@lang('lang.adress')</th>
                <th scope="col">Tel.</th>
                <th scope="col">@lang('lang.birth_date') </th>
                <th scope="col">@lang('lang.city') </th>
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
                                <li><a class="dropdown-item" href="/etudiants/{{$etudiant->etudiant_id}}">@lang('lang.details')</a></li>
                                <li><a class="dropdown-item" href="/etudiants/modifier/{{$etudiant->etudiant_id}}">@lang('lang.modify') </a></li>
                                <li><a class="dropdown-item" href="/etudiants/supprimer/{{$etudiant->etudiant_id}}">@lang('lang.delete')</a></li>
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
