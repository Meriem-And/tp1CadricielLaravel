
@extends('layout')
@section('content')
    <div class="container">
        <h1>Détails de l'etudiant {{$etudiant->etudiant_id}} </h1>


        <table class="table table-sm">

            <tbody>

                <tr>
                    <td>Nom :</td>
                    <td>{{$etudiant->nom}} </td>
                </tr>
                <tr>
                    <td>Adresse :</td>
                    <td>{{$etudiant->adresse}} </td>
                </tr>
                <tr>
                    <td>Phone :</td>
                    <td>{{$etudiant->phone}} </td>
                </tr>

                <tr>
                    <td>Email :</td>
                    <td>{{$etudiant->email}} </td>
                </tr>
                <tr>
                    <td>Date de naissance :</td>
                    <td>{{$etudiant->naissance}} </td>
                </tr>
                <tr>
                    <td>Ville :</td>
                    <td>{{$etudiant->ville}} </td>
                </tr>

            </tbody>
        </table>

<a class="btn btn-dark" href="/etudiants">Retour</a>
    </div>


@endsection
