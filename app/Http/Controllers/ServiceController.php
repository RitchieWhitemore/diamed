<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Service;
use SEOMeta;

class ServiceController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Услуги');
        return view('public.service.index');
    }

    public function view($slug)
    {
        $service = $this->getModel($slug);

        SEOMeta::setTitle($service->getSEOTitle());
        SEOMeta::setDescription($service->getSEODescription());
        SEOMeta::setKeywords($service->getSEOKeywords());

        $prices = $service->prices()->showOnService()->notHidden()->get();

        $reviews = Review::notHidden()->orderByDesc('created_at')->limit(3)->get();

        $specialists = $service->specialists()->orderBy('order_column')->get();

        return view('public.service.view', compact('service', 'prices', 'reviews', 'specialists'));
    }

    public function prices($slug)
    {
        $service = $this->getModel($slug);

        SEOMeta::setTitle('Цены на ' . $service->name);

        $prices = $service->prices()->notHidden()->get();

        $specialists = $service->specialists()->orderBy('order_column')->get();

        $reviews = Review::notHidden()->orderByDesc('created_at')->limit(3)->get();

        return view('public.service.price', compact('prices', 'specialists', 'reviews'));
    }

    private function getModel(string $slug)
    {
        return Service::whereSlug($slug)->notHidden()->firstOrFail();
    }
}
