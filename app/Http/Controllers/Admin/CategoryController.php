<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Category::defaultOrder()->withDepth()->get();
        return view('admin.categories.create', compact('parents'));
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
            'name' => 'required|string|max:255',
            'menu_name' => 'nullable|string|max:255',
            'parent' => 'nullable|integer|exists:page_categories,id',
            'hidden' => 'integer',
            'slug' => 'nullable|string|exists:page_categories,slug|unique:page_categories,slug',
        ]);
        $category = Category::create($request->all());

        return redirect()->route('admin.categories.show', $category);
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Category $category)
    {
        $parents = Category::defaultOrder()->withDepth()->get();
        return view('admin.categories.edit', compact('category', 'parents'));
    }

    /**
     * @param Request $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'menu_name' => 'nullable|string|max:255',
            'parent' => 'nullable|integer|exists:page_categories,id',
            'hidden' => 'integer',
            'slug' => [
                'nullable',
                'string',
                Rule::unique('page_categories', 'slug')->ignore($category->id),
            ]
        ]);
        $category->update([
            'name' => $request['name'],
            'menu_name' => $request['menu_name'],
            'hidden' => $request['hidden'],
            'parent_id' => $request['parent'],
            //'slug' => !empty($request['slug']) ? $request['slug'] : '',
            'slug' => $request['slug'],
        ]);

        return redirect()->route('admin.categories.show', $category);
    }

    /**
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
