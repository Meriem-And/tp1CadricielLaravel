<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $articles = Article::select('*','articles.id as article_id')
                ->join('users','articles.user_id','=','users.id')
                ->get();

            return view('forum.articles', ['articles' => $articles]);
        }
        //return redirect("login")->withSuccess('Vous n\'êtes pas autorisé à accéder');
    }

    public function create()
    {
        return view('forum.ajouter');
    }

    public function save(Request $request)
    {
        $request->validate([
            'titre' => 'required|min:6',
            'contenu' => 'required|min:100',
        ]);
        $newArticle = Article::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'langue' => 'FR',
            'user_id' => Auth::id()
        ]);
        $newArticle->save();

        return redirect('/articles');
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('/articles');
    }

    public function update($id)
    {
        $article = Article::find($id);
        return view('forum.modifier', ['article'=>$article]);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $article = Article::find($id);
        $request->validate([
            'titre' => 'required|min:6',
            'contenu' => 'required|min:100',
        ]);
        $article->update([
            'titre' => $request->titre,
            'contenu' => $request->contenu
        ]);
        $article->save();
        return redirect('/articles');
    }



}
