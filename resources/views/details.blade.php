
@extends('layout')
@section('content')
    <div class="container">
        <h1>@lang('lang.details_student') {{$etudiant->etudiant_id}} </h1>


        <table class="table table-sm">

            <tbody>

                <tr>
                    <td>@lang('lang.nom') :</td>
                    <td>{{$etudiant->nom}} </td>
                </tr>
                <tr>
                    <td>@lang('lang.adress') :</td>
                    <td>{{$etudiant->adresse}} </td>
                </tr>
                <tr>
                    <td>Tel :</td>
                    <td>{{$etudiant->phone}} </td>
                </tr>

                <tr>
                    <td>Email :</td>
                    <td>{{$etudiant->email}} </td>
                </tr>
                <tr>
                    <td>@lang('lang.birth_date') :</td>
                    <td>{{$etudiant->naissance}} </td>
                </tr>
                <tr>
                    <td>@lang('lang.city') :</td>
                    <td>{{$etudiant->ville}} </td>
                </tr>

            </tbody>
        </table>

<a class="btn btn-dark" href="/etudiants">@lang('lang.return')</a>
    </div>


@endsection
