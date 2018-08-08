<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * 展示页面
     * $id int
     * $return
     */
    public function show($id)
    {
        $article = Article::find($id);
//        return $article;
//        dd($article->publish_at->diffForHumans());
//        dd($article->created_at->diffForHumans());
//        dd($article->publish_at);
        return view('articles.show', compact('article'));
    }

    /**
     * 创建文章
     *$post
     */
    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
//        return $request->all();
        Article::create($request->all());
        return redirect('/articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article', $article));

    }

    public function update(CreateArticleRequest $request, $id)
    {
        Article::findOrFail($id);
        Article::create($request->all());
        return redirect('/articles');
    }
}
