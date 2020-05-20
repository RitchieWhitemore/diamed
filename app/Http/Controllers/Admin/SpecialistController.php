<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpecialistRequest;
use App\models\Specialist;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;

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

    public function upload(Request $request, Specialist $specialist)
    {
        $mimeTypes = ['image/jpeg', 'image/png'];

        $file = $specialist->addMediaFromRequest('files')->toMediaCollection('certificate', 'certificates');

        return response()->json([
            'files' => [
                [
                    "name" => $file->name,
                    "size" => $file->size,
                    "url" => $file->getUrl(),
                    "thumbnailUrl" => in_array($file->mime_type, $mimeTypes) ? $file->getUrl('thumb-admin') : '',
                    "deleteUrl" => route('admin.specialist.deleteFile', ['file' => $file->id]),
                    "deleteType" => "DELETE"
                ],
            ]
        ], 200);
    }

    public function getFiles(Specialist $specialist)
    {
        $files = [];

        $mimeTypes = ['image/jpeg', 'image/png'];

        foreach ($specialist->getMedia('certificate') as $media) {
            /**
             * @var $media Media
             */

            $files[] = [
                "name" => $media->name,
                "size" => $media->size,
                "url" => $media->getUrl(),
                "thumbnailUrl" => in_array($media->mime_type, $mimeTypes) ? $media->getUrl('thumb-admin') : '',
                "deleteUrl" => route('admin.specialist.deleteFile', ['file' => $media->id]),
                "deleteType" => "DELETE"
            ];
        }

        return response()->json([
            'files' => $files,
        ], 200);
    }

    public function deleteFile(Specialist $specialist, Media $file)
    {
        $file->delete();
        return response()->json([
            'result' => true,
        ], 200);
    }
}
