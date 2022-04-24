@extends('../layout')
@section('content')
    <div class="container">
        <h1 class="m-5">Forum  </h1>
        <a href="/articles/ajouter" class="btn btn-dark">@lang('lang.add_article') </a>
    </div>

    <div class="container">


        <div class="row">
            @forelse($articles as $article)
            <div class="card m-3 p-3" >
                <div class="card-body">
                    <h4 class="card-title">{{$article->titre}}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Cree par {{$article->name}} : le {{$article->created_at}}</h6>
                    <p class="card-text">{{$article->contenu}}</p>
                    @if($article->updated_at != null)
                    <h6 class="card-subtitle mb-2 text-muted">Derniere modification {{$article->updated_at}}</h6>
                    @endif
                    @if(auth()->user()->id == $article->user_id)
                        <a class="btn btn-dark" href="/articles/modifier/{{$article->article_id}}">Modifier</a>
                        <a class="btn btn-danger" href="/articles/supprimer/{{$article->article_id}}">Supprimer</a>
                    @endif

                </div>
            </div>
            @empty
                <p>Pas d'article</p>
            @endforelse

        </div>

    </div>


@endsection
