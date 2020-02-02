<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $questions = Question::ordered()->get();
        return view('admin.question.index', compact('questions'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * @param QuestionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(QuestionRequest $request)
    {
        $question = new Question($request->all());
        $question->answer = $request->answer;
        $question->hidden = $request->hidden;
        $question->save();

        return redirect()->route('admin.questions.show', compact('question'));
    }

    /**
     * @param Question $question
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Question $question)
    {
        return view('admin.question.show', ['model' => $question]);
    }

    /**
     * @param Question $question
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Question $question)
    {
        return view('admin.question.edit', ['model' => $question]);
    }

    /**
     * @param QuestionRequest $request
     * @param Question $question
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(QuestionRequest $request, Question $question)
    {
        $question->fill($request->all());
        $question->answer = $request->answer;
        $question->hidden = $request->hidden;
        $question->save();

        return redirect()->route('admin.questions.show', compact('question'));
    }

    /**
     * @param Question $question
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('admin.questions.index');
    }

    /**
     * @param Question $question
     * @return \Illuminate\Http\RedirectResponse
     */
    public function up(Question $question)
    {
        $question->moveOrderUp();
        return redirect()->route('admin.questions.index');
    }

    /**
     * @param Question $question
     * @return \Illuminate\Http\RedirectResponse
     */
    public function down(Question $question)
    {
        $question->moveOrderDown();
        return redirect()->route('admin.questions.index');
    }
}
