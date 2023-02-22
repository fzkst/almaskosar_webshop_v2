<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIpadRequest extends FormRequest
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
            'category_id' => 'required | integer | min:1',
            'model' => 'required | string | max:50',
            'color' => 'required | string | max:30',
            'storage' => 'required | integer',
            //'cellular' => 'required | integer,
            'price' => 'required | integer',
            'stock' => 'required | integer',
            'image' => 'required | image'
        ];
    }
}
