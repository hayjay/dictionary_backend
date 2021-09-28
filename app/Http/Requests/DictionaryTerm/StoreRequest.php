<?php

namespace App\Http\Requests\DictionaryTerm;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules()
    {
         return [
            'word' => 'required|unique:dictionary_terms|string',
            'description' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'word.required' => 'Word field is required and must be unique!',
            'description.required' => 'Description field is required!',
        ];
    }
}