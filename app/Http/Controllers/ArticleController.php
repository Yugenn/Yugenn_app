<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

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

}

