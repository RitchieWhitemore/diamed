<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShortPriceRequest;
use App\Models\ShortPrice;

class ShortPriceController extends Controller
{
    /**
     * @param string $type
     * @param $owner
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(string $type, $owner)
    {
        $prices = $owner->shortPrices()->ordered()->get() ?? [];

        return view('admin.short_price.index', compact('prices', 'owner', 'type'));
    }

    /**
     * @param string $type
     * @param $owner
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(string $type, $owner)
    {
        return view('admin.short_price.create', compact('type', 'owner'));
    }

    /**
     * @param ShortPriceRequest $request
     * @param string $type
     * @param $owner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ShortPriceRequest $request, string $type, $owner)
    {
        $price = ShortPrice::create($request->all());

        return redirect()->route('admin.short_prices.short_prices.show',
            [$type, $owner, $price]);
    }

    /**
     * @param string $type
     * @param $owner
     * @param ShortPrice $short_price
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $type, $owner, ShortPrice $short_price)
    {
        return view('admin.short_price.show', ['type' => $type, 'owner' => $owner, 'model' => $short_price]);
    }

    /**
     * @param string $type
     * @param $owner
     * @param ShortPrice $short_price
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(string $type, $owner, ShortPrice $short_price)
    {
        return view('admin.short_price.edit', ['type' => $type, 'owner' => $owner, 'model' => $short_price]);
    }

    /**
     * @param ShortPriceRequest $request
     * @param string $type
     * @param $owner
     * @param ShortPrice $short_price
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ShortPriceRequest $request, string $type, $owner, ShortPrice $short_price)
    {
        $short_price->update($request->all());

        return redirect()->route('admin.short_prices.short_prices.show', [$type, $owner, $short_price]);
    }

    /**
     * @param string $type
     * @param $owner
     * @param ShortPrice $short_price
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(string $type, $owner, ShortPrice $short_price)
    {
        $short_price->delete();

        return redirect()->route('admin.short_prices.short_prices.index', [$type, $owner]);
    }

    /**
     * @param string $type
     * @param $owner
     * @param $short_price
     * @return \Illuminate\Http\RedirectResponse
     */
    public function up(string $type, $owner, $short_price)
    {
        $shortPrice = ShortPrice::findOrFail($short_price);
        $shortPrice->moveOrderUp();
        $shortPrice->save();
        return redirect()->route('admin.short_prices.short_prices.index', [$type, $owner]);
    }

    /**
     * @param string $type
     * @param $owner
     * @param $short_price
     * @return \Illuminate\Http\RedirectResponse
     */
    public function down(string $type, $owner, $short_price)
    {
        $shortPrice = ShortPrice::findOrFail($short_price);
        $shortPrice->moveOrderDown();
        $shortPrice->save();
        return redirect()->route('admin.short_prices.short_prices.index', [$type, $owner]);
    }
}
