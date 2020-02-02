<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpecialistRequest;
use App\models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $specialists = Specialist::ordered()->get();
        return view('admin.specialist.index', compact('specialists'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.specialist.create');
    }

    /**
     * @param SpecialistRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Spatie\MediaLibrary\Exceptions\FileCannotBeAdded\DiskDoesNotExist
     * @throws \Spatie\MediaLibrary\Exceptions\FileCannotBeAdded\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\Exceptions\FileCannotBeAdded\FileIsTooBig
     */
    public function store(SpecialistRequest $request)
    {
        $specialist = Specialist::create($request->all());

        $specialist->uploadImage('specialist_photo', $request, 'specialist_photo');

        foreach ($request->input('certificate', []) as $file) {
            $specialist->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('certificate');
        }

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

        if (count($specialist->certificate) > 0) {
            foreach ($specialist->certificate as $media) {
                if ($media->collection_name != 'certificate') {
                    continue;
                }
                if (!in_array($media->file_name, $request->input('certificate', []))) {
                    $media->delete();
                }
            }
        }

        $media = $specialist->certificate->pluck('file_name')->toArray();

        foreach ($request->input('certificate', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $specialist->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('certificate');
            }
        }

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

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name' => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
}
