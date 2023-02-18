<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIphoneRequest extends FormRequest
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
            'model' => 'required | string | max:50',
            'color' => 'required | string | max:30',
            'storage' => 'required | integer',
            'price' => 'required | integer',
            'stock' => 'required | integer',
            'image' => 'required | image'
        ];
    }
}
