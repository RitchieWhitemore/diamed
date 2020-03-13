<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::orderByDesc('created_at')->paginate(15);

        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        $review = new Review($request->all());
        $review->hidden = $request->hidden;
        if ($request->has('audio')) {
            $review->uploadAudio($request->audio);
        }
        $review->save();

        return redirect()->route('admin.reviews.show', compact('review'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view('admin.review.show', ['model' => $review]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('admin.review.edit', ['model' => $review]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewRequest $request, Review $review)
    {
        $review->fill($request->all());
        $review->hidden = $request->hidden;

        if ($request->has('audio')) {
            if (!empty($review->audio)) {
                \Storage::delete('public/' . $review->audio);
            }

            $review->uploadAudio($request->audio);
        }
        $review->save();

        return redirect()->route('admin.reviews.show', compact('review'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('admin.reviews.index');
    }
}
