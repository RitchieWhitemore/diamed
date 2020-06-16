<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'name' => ['required'],
            'end_show' => ['nullable', 'date'],
            'mobile_slide' => ['nullable', 'image'],
            'desktop_slide' => ['image'],
            'link' => ['url'],
            'buttonName' => ['string'],
            'hidden' => 'integer'
        ];
    }
}
