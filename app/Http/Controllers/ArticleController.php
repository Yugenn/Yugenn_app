<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Birthplace;


class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $birthplace = $request->birthplace;
        $params = $request->query();
        $articles = Article::search($params)->paginate(10);
        $articles->appends(compact('name', 'birthplace'));
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $birthplaces = Birthplace::all();
        return view('articles.create', compact('birthplaces'));
    }

    public function store(Request $request)
    {
        $article = new Article;

        $article->name = $request->name;
        $article->birthplace_id = $request->birthplace;
        // $article->price = $request->price;
        // $article->volume = $request->volume;
        // $article->description = $request->description;
        // $article->img_path = 'storage/article_image/4.jpg';

        $article->save();

        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        $birthplaces = birthplace::all();
        return view('articles.edit', compact('article', 'birthplaces'));
    }

    public function update(Request $request, Article $article)
    {
        $article->name = $request->name;
        $article->birthplace_id = $request->birthplace_id;
        // $article->price = $request->price;
        // $article->volume = $request->volume;
        // $article->description = $request->description;
        // $article->img_path = $request->img_path;

        $article->save();

        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}

