<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialistRequest extends FormRequest
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
        $rules = [
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'middle_name' => 'string',
            'description' => 'required|string',
            'begin_work' => 'date',
            'specialist_photo' => 'image',
            //'certificate' => 'image',
            'hidden' => 'integer'
        ];

        /* if ($this->isMethod('PUT')) {
             $rules['specialist_photo'] = [
                 Rule::requiredIf(function () {
                     return $this->has(['specialist_photo']);
                 }),
                 'image'
             ];
         }*/

        return $rules;
    }
}
