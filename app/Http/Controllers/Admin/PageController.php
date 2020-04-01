<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();

        return view('admin.page.index', ['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialists = [];
        return view('admin.page.create', compact('specialists'));
    }

    /**
     * @param PageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(PageRequest $request)
    {
        $page = Page::create($request->all());
        $page->uploadImage('image', $request, 'images');

        $page->specialists()->attach($request->get('specialists'));

        return redirect()->route('admin.pages.show', compact('page'));
    }

    /**
     * @param Page $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Page $page)
    {
        return view('admin.page.show', ['model' => $page]);
    }

    /**
     * @param Page $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Page $page)
    {
        $specialists = $page->specialistListIds();
        return view('admin.page.edit', ['model' => $page, 'specialists' => $specialists]);
    }

    /**
     * @param PageRequest $request
     * @param Page $page
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PageRequest $request, Page $page)
    {
        $page->update($request->all());
        $page->uploadImage('image', $request, 'images');

        $page->specialists()->sync($request->get('specialists'));

        return redirect()->route('admin.pages.show', $page);
    }

    /**
     * @param Page $page
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index');
    }
}
