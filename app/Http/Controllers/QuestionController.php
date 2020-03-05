<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Traits\HiddenInterface;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::ordered()->notHidden()->get();
        return view('public.faq', compact('questions'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'question' => 'required|string',
            'deal' => 'accepted'
        ],
            [
                'required' => 'Поле должно быть заполнено',
                'accepted' => 'Вы должны указать согласие'
            ]);

        $question = new Question($request->all());
        $question->hidden = HiddenInterface::HIDDEN_YES;
        if ($question->save()) {
            \Session::flash('success', 'Вопрос успешно отправлен!');
        };

        return redirect()->route('faq');
    }

}
