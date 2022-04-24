<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
    <!-- Fonts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <style>
        body {
            font-family: 'Nunito'
        }
    </style>
</head>
<body>
@php $locale = session()->get('locale'); @endphp
<nav class="navbar navbar-light navbar-expand-lg mb-5">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bstarget="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="dropdown-item @if($locale=='en') bg-warning @endif" href="/lang/en">
                        <img src="{{asset('images/flag/en.png')}}" width="20" height="20"> English</a>
                </li>
                <li class="nav-item">
                    <a class="dropdown-item @if($locale=='fr') bg-warning @endif" href="/lang/fr">
                        <img src="{{asset('images/flag/fr.png')}}" width="20" height="20"> Français</a>
                </li>
                <li class="nav-item">
                    <a class="dropdown-item" href="/etudiants">@lang('lang.student')</a>
                </li>

                @if(Auth::check())
                    <li class="nav-item">
                        <a class="dropdown-item" href="/articles">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item" href="/files">@lang('lang.list_files')</a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item" href="/logout">@lang('lang.deco')</a>
                    </li>
                    <li>
                        <a class="dropdown-item fw-bolder">@lang('lang.welcome') {{auth()->user()->name}}!</a>
                    </li>
                @else
                    <li>
                        <a class="dropdown-item" href="/login">@lang('lang.connect')</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/registration">@lang('lang.register')</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')
</body>
{{--<script src="{{asset('js/bootstrap.min.js')}}" ></script>--}}
</html>
