<?php

namespace App\Http\Controllers;

use App\Models\Page;
use SEOMeta;


class InfoController extends Controller
{
    public function index()
    {
        \Artesaos\SEOTools\Facades\SEOMeta::setTitle('Информация для пациентов');

        $pages = Page::isInfo()->orderByDesc('created_at')->notHidden()->get();

        return view('public.info', compact('pages'));
    }

    public function view($slug)
    {
        $article = Page::whereSlug($slug)->notHidden()->firstOrFail();
        SEOMeta::setTitle($article->getSEOTitle());
        SEOMeta::setDescription($article->getSEODescription());
        SEOMeta::setKeywords($article->getSEOKeywords());

        return view('public.article.view', compact('article'));
    }
}
