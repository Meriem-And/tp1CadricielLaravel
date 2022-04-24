@extends('layout')
@section('content')
    <div class="container">
        <h1>@lang('lang.add_student')  </h1>


        <form method="POST" action="/articles/ajouter">
            @csrf
            <div class="row">
                <div class="control-group col-12">
                    <label for="nom">@lang('lang.nom')</label>
                    <input type="text" id="nom" class="form-control" name="nom" required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="adresse">@lang('lang.adress')</label>
                    <textarea id="adresse" class="form-control" name="adresse"
                              rows="" required></textarea>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="phone">Tel</label>
                    <input type="text" id="phone" class="form-control" name="phone"
                           required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="email"
                           required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="naissance">@lang('lang.birth_date') </label>
                    <input type="date" id="naissance" class="form-control" name="naissance"
                           placeholder="Entrer date de naissance  "
                           required>
                </div>

                <div class="control-group col-12 mt-2">
                    <label>@lang('lang.city') </label>
                    <select class="form-select" aria-label="Ville de l'etudiant" name="ville_id">
                        @foreach($villes as $ville)
                            <option value="{{$ville->id}}"> {{$ville->ville}}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="row mt-2">
                <div class="control-group col-12 text-center">
                    <button id="btn-submit" class="btn btn-dark">
                        @lang('lang.submit')
                    </button>
                </div>
            </div>
        </form>


        <a class="btn btn-dark m-5 p-5" href="/etudiants">Retour</a>
    </div>
@endsection
