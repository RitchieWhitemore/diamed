<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\Slider;
use Illuminate\Http\Request;
use Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::ordered()->get();

        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'end_show' => ['nullable', 'date'],
            'mobile_slide' => ['nullable', 'image'],
            'desktop_slide' => ['required', 'image'],
            'hidden' => 'integer'
        ]);

        $slider = Slider::create($request->all());

        $this->uploadImage('mobile_slide', $request, $slider, 'mobile_slide');
        $this->uploadImage('desktop_slide', $request, $slider, 'desktop_slide');

        return redirect()->route('admin.sliders.show', $slider);
    }

    /**
     * @param Slider $slider
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Slider $slider)
    {
        return view('admin.sliders.show', ['model' => $slider]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', ['model' => $slider]);
    }

    /**
     * @param Request $request
     * @param Slider $slider
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'name' => ['required'],
            'end_show' => ['nullable', 'date'],
            'mobile_slide' => ['nullable', 'image'],
            'desktop_slide' => ['required', 'image'],
            'hidden' => 'integer'
        ]);

        $slider->update($request->all());

        $this->uploadImage('mobile_slide', $request, $slider, 'mobile_slide');
        $this->uploadImage('desktop_slide', $request, $slider, 'desktop_slide');

        return redirect()->route('admin.sliders.show', $slider);
    }

    /**
     * @param Slider $slider
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        $slider->clearMediaCollection();
        return redirect()->route('admin.sliders.index');
    }

    /**
     * @param Slider $slider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function up(Slider $slider)
    {
        $slider->moveOrderUp();
        return redirect()->route('admin.sliders.index');
    }

    /**
     * @param Slider $slider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function down(Slider $slider)
    {
        $slider->moveOrderDown();
        return redirect()->route('admin.sliders.index');
    }

    protected function uploadImage($attribute, Request $request, Slider $model, $collection)
    {
        if (isset($request[$attribute])) {
            $fileName = Str::before($request->file($attribute)->getClientOriginalName(),
                '.' . $request->file($attribute)->getClientOriginalExtension());
            $fileName = Str::slug($fileName);

            $model->clearMediaCollectionExcept($collection, $model->getFirstMedia());
            $model->addMediaFromRequest($attribute)
                ->preservingOriginal()
                ->usingName($fileName)
                ->usingFileName($fileName . '.' . $request->file($attribute)->getClientOriginalExtension())
                ->toMediaCollection($collection);
        }
    }
}
