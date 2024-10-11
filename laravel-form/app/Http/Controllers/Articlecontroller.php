<?php

namespace App\Http\Controllers;

use App\Http\Requests\articlerequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Articlecontroller extends Controller
{
    public function index(Article $article)
    {
        $article = Article::all();
        return view('index', [
            'articles' => $article
        ]);
    }

    public function enregistrer()
    {
        return view('article.add_article');
    }

    public function handleenregistrer(Article $article, articlerequest $request)
    {
        $article->titre = $request->titre;
        $article->descriptions = $request->descriptions;
        $article->users_id = Auth::id();
        $article->save();
        return redirect()->back()->with('success', "l'article a ete enregistrer avec success!");
    }

    public function show(Article $article)
    {
        return view('article.show', [
            'recuparticles' => $article
        ]);
    }
    public function edit(Article $article)
    {
        return view('article.edit', [
            'article' => $article
        ]);
    }

    public function update(Article $article, articlerequest $request)
    {
        $article->titre = $request->titre;
        $article->descriptions = $request->descriptions;
        $article->save();
        return redirect('../index');
    }

    public function delete(Article $article)
    {
        $article->delete();
        return redirect('../index');
    }
}
