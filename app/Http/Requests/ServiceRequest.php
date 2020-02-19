<?php

namespace App\Http\Requests;

use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'menu_name' => 'nullable|string|max:255',
            'text' => 'nullable|string',
            'hidden' => 'integer',
            'slug' => 'nullable|string|exists:pages,slug|unique:pages,slug',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
        ];

        if ($this->isMethod('PUT')) {
            $serviceId = Service::whereSlug($request->get('slug'))->first()->id;
            $rules['slug'] = [
                'nullable',
                'string',
                Rule::unique('services', 'slug')->ignore($serviceId),
            ];
        }

        return $rules;
    }
}
