<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
            'last_name' => 'required |string | max:255',
            'first_name' => 'required |string | max:255',
            'email' => 'required |string | email:rfc,dns',
            'postal_code' => 'required |integer | digits_between:4,4',
            'city' => 'required | string | max:255',
            'address' => 'required | string | max:255',
            'phone_number' => 'required | string | max:15',
            'customer_code' => 'required | string | max:15',
            'total_price' => 'required | string | max:255',
            'status' => 'integer',
            'tracking_number' => 'required | string | max:255'
        ];
    }
}
