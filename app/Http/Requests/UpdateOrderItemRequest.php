<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderItemRequest extends FormRequest
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
            'order_id' => 'required | integer | exists:orders,id',
            'product_id' => 'required | integer | exists:products,id',
            'price' => 'required | string | max:255',
            'product_quantity' => 'required | string | max:255'
        ];
    }
}
