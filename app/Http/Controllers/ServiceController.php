<?php

namespace App\Http\Controllers;

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

        return view('public.service.view', compact('service', 'prices'));
    }

    public function prices($slug)
    {
        $service = $this->getModel($slug);

        $prices = $service->prices()->notHidden()->get();

        return view('public.service.price', compact('prices'));
    }

    private function getModel(string $slug)
    {
        return Service::whereSlug($slug)->notHidden()->firstOrFail();
    }
}
