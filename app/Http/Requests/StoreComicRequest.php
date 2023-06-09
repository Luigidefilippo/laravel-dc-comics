<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|min:2|max:255',
            'series' => 'required|min:5|max:100',
            'sale_date'=> 'required|max:255',
            'type' => 'required|min:2|max:100'

        ];
    }
}
