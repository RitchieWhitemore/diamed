<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PriceRequest;
use App\Models\Price;
use App\Models\Service;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Service $service)
    {
        $prices = Price::ordered()->where(['service_id' => $service->id])->get();

        return view('admin.price.index', compact('service', 'prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Service $service)
    {
        return view('admin.price.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PriceRequest $request)
    {
        $price = Price::create($request->all());

        return redirect()->route('admin.services.prices.show',
            ['service' => $request->get('service_id'), 'price' => $price]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service, Price $price)
    {
        return view('admin.price.show', ['service' => $service, 'model' => $price]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service, Price $price)
    {
        return view('admin.price.edit', ['service' => $service, 'model' => $price]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PriceRequest $request, Service $service, Price $price)
    {
        $price->update($request->all());

        return redirect()->route('admin.services.prices.show', [$service, $price]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service, Price $price)
    {
        $price->delete();

        return redirect()->route('admin.services.prices.index', $service);
    }

    /**
     * @param Service $service
     * @param Price $price
     * @return \Illuminate\Http\RedirectResponse
     */
    public function up(Service $service, Price $price)
    {
        $price->moveOrderUp();
        return redirect()->route('admin.services.prices.index', $service);
    }

    /**
     * @param Service $service
     * @param Price $price
     * @return \Illuminate\Http\RedirectResponse
     */
    public function down(Service $service, Price $price)
    {
        $price->moveOrderDown();
        return redirect()->route('admin.services.prices.index', $service);
    }
}
