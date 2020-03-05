<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return view('public.service.index');
    }

    public function view($slug)
    {
        $service = $this->getModel($slug);

        $prices = $service->prices()->showOnService()->notHidden()->get();

        $reviews = Review::notHidden()->orderByDesc('created_at')->limit(3)->get();

        return view('public.service.view', compact('service', 'prices', 'reviews'));
    }

    public function prices($slug)
    {
        $service = $this->getModel($slug);

        $prices = $service->prices()->notHidden()->get();

        return view('public.service.price', compact('prices'));
    }

    private function getModel(string $slug)
    {
        return Service::whereSlug($slug)->notHidden()->with(['specialists'])->firstOrFail();
    }
}
