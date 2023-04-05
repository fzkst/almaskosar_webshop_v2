<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCartRequest extends FormRequest
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
            'user_id' => 'required | integer | exists:users,id',
            'category_id' => 'required | integer | exists:categories,id',
            'product_id' => 'required | integer | exists:products,id',
            'product_quantity' => 'required | integer'
        ];
    }
}
