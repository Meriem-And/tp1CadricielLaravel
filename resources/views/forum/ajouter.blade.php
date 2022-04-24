@extends('../layout')
@section('content')

    <div class="container">
        <h1>@lang('lang.add_article')  </h1>


        <form method="POST" action="/articles/ajouter">
            @csrf
            <div class="row m-3 p-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="control-group col-12">
                    <label for="nom">@lang('lang.title')</label>
                    <input type="text" id="nom" class="form-control" name="titre" required>
                </div>
                <div class="control-group col-12 mt-2">
                    <label for="adresse">Article</label>
                    <textarea id="adresse" class="form-control" name="contenu"
                              rows="10" required></textarea>
                </div>

                <div class="row mt-2">
                    <div class="control-group col-12 text-center">
                        <button id="btn-submit" class="btn btn-dark">
                            @lang('lang.submit')
                        </button>
                    </div>
                </div>

            </div>
        </form>
        <div>

            <a class="btn btn-dark m-5" href="/etudiants">Retour</a>
        </div>

@endsection
