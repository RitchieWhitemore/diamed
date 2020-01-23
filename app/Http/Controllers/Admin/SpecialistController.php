<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpecialistRequest;
use App\models\Specialist;

class SpecialistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialists = Specialist::ordered()->get();
        return view('admin.specialist.index', compact('specialists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.specialist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpecialistRequest $request)
    {
        $specialist = Specialist::create($request->all());

        $specialist->uploadImage('specialist_photo', $request, 'specialist_photo');

        return redirect()->route('admin.specialists.show', compact('specialist'));
    }

    /**
     * @param Specialist $specialist
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Specialist $specialist)
    {
        return view('admin.specialist.show', ['model' => $specialist]);
    }

    /**
     * @param Specialist $specialist
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Specialist $specialist)
    {
        return view('admin.specialist.edit', ['model' => $specialist]);
    }

    /**
     * @param SpecialistRequest $request
     * @param Specialist $specialist
     */
    public function update(SpecialistRequest $request, Specialist $specialist)
    {
        $specialist->update($request->all());

        $specialist->uploadImage('specialist_photo', $request, 'specialist_photo');

        return redirect()->route('admin.specialists.show', $specialist);
    }

    /**
     * @param Specialist $specialist
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Specialist $specialist)
    {
        $specialist->delete();
        $specialist->clearMediaCollection();
        return redirect()->route('admin.specialists.index');
    }

    /**
     * @param Specialist $specialist
     * @return \Illuminate\Http\RedirectResponse
     */
    public function up(Specialist $specialist)
    {
        $specialist->moveOrderUp();
        return redirect()->route('admin.specialists.index');
    }

    /**
     * @param Specialist $specialist
     * @return \Illuminate\Http\RedirectResponse
     */
    public function down(Specialist $specialist)
    {
        $specialist->moveOrderDown();
        return redirect()->route('admin.specialists.index');
    }
}
