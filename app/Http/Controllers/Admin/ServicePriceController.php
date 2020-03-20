<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicePriceRequest;
use App\Models\Service;
use App\Models\ServicePrice;

class ServicePriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Service $service
     * @return \Illuminate\Http\Response
     */
    public function index(Service $service)
    {
        $prices = ServicePrice::ordered()->where(['service_id' => $service->id])->get();

        return view('admin.service_price.index', compact('service', 'prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Service $service
     * @return \Illuminate\Http\Response
     */
    public function create(Service $service)
    {
        return view('admin.service_price.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicePriceRequest $request)
    {
        $price = ServicePrice::create($request->all());

        return redirect()->route('admin.services.service_prices.show',
            ['service' => $request->get('service_id'), 'service_price' => $price]);
    }

    /**
     * Display the specified resource.
     *
     * @param Service $service
     * @param ServicePrice $price
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service, ServicePrice $service_price)
    {
        return view('admin.service_price.show', ['service' => $service, 'model' => $service_price]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Service $service
     * @param ServicePrice $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service, ServicePrice $service_price)
    {
        return view('admin.service_price.edit', ['service' => $service, 'model' => $service_price]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServicePriceRequest $request
     * @param Service $service
     * @param ServicePrice $price
     * @return \Illuminate\Http\Response
     */
    public function update(ServicePriceRequest $request, Service $service, ServicePrice $service_price)
    {
        $service_price->update($request->all());

        return redirect()->route('admin.services.service_prices.show', [$service, $service_price]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $service
     * @param ServicePrice $price
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Service $service, ServicePrice $show_price)
    {
        $show_price->delete();

        return redirect()->route('admin.services.service_prices.index', $service);
    }

    /**
     * @param Service $service
     * @param ServicePrice $price
     * @return \Illuminate\Http\RedirectResponse
     */
    public function up(Service $service, ServicePrice $price)
    {
        $price->moveOrderUp();
        return redirect()->route('admin.services.service_prices.index', $service);
    }

    /**
     * @param Service $service
     * @param ServicePrice $price
     * @return \Illuminate\Http\RedirectResponse
     */
    public function down(Service $service, ServicePrice $price)
    {
        $price->moveOrderDown();
        return redirect()->route('admin.services.service_prices.index', $service);
    }
}
