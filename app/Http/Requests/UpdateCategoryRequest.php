<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required | string | max:50',
            'table_name' => 'required | string | max:50',
            'description' => 'required | string',
            //'status' => 'required | integer',
            //'popular' => 'required |integer',
            'image' => 'required | image'
        ];
    }
}
