<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Review;
use SEOMeta;


class ArticleController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Статьи и новости');
        $articles = Page::isArticles()->notHidden()->paginate(15);
        return view('public.article.index', compact('articles'));
    }

    public function view($slug)
    {
        $article = Page::whereSlug($slug)->notHidden()->firstOrFail();
        SEOMeta::setTitle($article->getSEOTitle());
        SEOMeta::setDescription($article->getSEODescription());
        SEOMeta::setKeywords($article->getSEOKeywords());

        $specialists = $article->specialistsPublic()->get();

        $prices = $article->getPublicShortPrices();

        $reviews = Review::notHidden()->orderByDesc('created_at')->limit(3)->get();

        return view('public.article.view', compact('article', 'specialists', 'reviews', 'prices'));
    }
}
