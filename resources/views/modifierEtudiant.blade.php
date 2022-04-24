@extends('layout')
@section('content')
    <div class="container">
        <h1> Modifier l'étudiant </h1>


        <form method="post" action="/etudiants/modifier">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="control-group col-12" hidden>
                    <label for="nom">Nom</label>
                    <input type="text" id="id" class="form-control" name="id" value="{{$etudiant->id}}"
                           placeholder="Nom de l'eleve " required>
                </div>
                <div class="control-group col-12">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" class="form-control" name="nom" value="{{$etudiant->nom}}"
                           placeholder="Nom de l'eleve " required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="adresse">Adresse</label>
                    <textarea id="adresse" class="form-control" name="adresse" placeholder="Entrer l'adresse"
                              rows="" required> {{$etudiant->adresse}}"
                    </textarea>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" class="form-control" value="{{$etudiant->phone}}" name="phone" placeholder="Entrer Numero de tel "
                           required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="email">Email</label>
                    <input type="email"  value="{{$etudiant->email}}" id="email" class="form-control" name="email" placeholder="Entrer l'email "
                           required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="naissance">Date de naissance </label>
                    <input type="date" value="{{$etudiant->naissance}}" id="naissance" class="form-control" name="naissance"
                           placeholder="Entrer date de naissance  "
                           required>
                </div>

                <div class="control-group col-12 mt-2">

                    <label>Ville </label>
                    <select class="form-select" aria-label="Ville de l'etudiant"  name="ville_id">
                        @foreach($villes as $ville)
                            <option value="{{$ville->id}}"
                            @if($ville->id===$etudiant->ville_id)
                                selected @endif >
                                {{$ville->ville}}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="row mt-2">
                <div class="control-group col-12 text-center">
                    <button id="btn-submit" class="btn btn-dark">
                        Soumettre
                    </button>
                </div>
            </div>
        </form>


        <a class="btn btn-dark" href="/etudiants">Retour</a>
    </div>


@endsection
