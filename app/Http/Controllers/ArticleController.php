<?php

namespace App\Http\Controllers;

use App\Models\Page;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Page::isArticles()->notHidden()->paginate(15);
        return view('public.article.index', compact('articles'));
    }

    public function view($slug)
    {
        $article = Page::whereSlug($slug)->notHidden()->firstOrFail();
        return view('public.article.view', compact('article'));
    }
}
