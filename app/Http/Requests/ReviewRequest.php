<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'rating' => 'required|integer|between:1,5',
            'hidden' => 'required|integer',
            'audio' => 'file|mimes:mpga'
        ];
    }
}
