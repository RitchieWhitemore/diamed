<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PromotionRequest;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Str;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::all();

        return view('admin.promotion.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromotionRequest $request)
    {
        $promotion = Promotion::create($request->all());

        $promotion->uploadImage('image', $request, 'promotion');

        return redirect()->route('admin.promotions.show', $promotion);
    }

    /**
     * @param Promotion $promotion
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Promotion $promotion)
    {
        return view('admin.promotion.show', ['model' => $promotion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Promotion $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        return view('admin.promotion.edit', ['model' => $promotion]);
    }

    /**
     * @param Request $request
     * @param Promotion $promotion
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(PromotionRequest $request, Promotion $promotion)
    {
        $promotion->update($request->all());

        $promotion->uploadImage('image', $request, 'promotion');

        return redirect()->route('admin.promotions.show', $promotion);
    }

    /**
     * @param Promotion $promotion
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        $promotion->clearMediaCollection();
        return redirect()->route('admin.promotions.index');
    }
}
