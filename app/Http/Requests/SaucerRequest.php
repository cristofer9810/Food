<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaucerRequest extends FormRequest
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
        $saucer = $this->route()->parameter('saucer');

        $rules = [
            'name' => 'required|string|min:3|max:40',
            'slug' => 'required|unique:saucers',
            'status' => 'required|in:1,2',
            'file' => 'image|mimes:png,jpg,jpeg'

        ];

        if ($saucer) {
            $rules['slug'] = 'required|unique:saucers,slug,' . $saucer->id;
        }

        if ($this->status == 2) {
            $rules = array_merge($rules, [
                'taste_id' => 'required',
                'description' => 'required|min:3|max:500',
                'price' => 'required',
                'small' => 'required|number',
                'medium' => 'required|number',
                'large' => 'required|number'

            ]);
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Debe ingresar un nombre para el platillo',
            'slug.required' => 'Este campo es requirido(este se genera automaticamente)',
            'description.required' => 'este campo es obligatorio',
            'price.required' => 'este campo es obligatorio',
            'small.required' => 'este campo es obligatorio',
            'medium.required' => 'este campo es obligatorio',
            'large.required' => 'este campo es obligatorio',
        ];
    }
}
