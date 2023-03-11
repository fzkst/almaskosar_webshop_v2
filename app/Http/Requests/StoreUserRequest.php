<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'last_name' => 'required | string | max:255',
            'first_name' => 'required | string | max:255',
            'email' => 'required | string ',
            'postal_code' => 'required | integer | min:1000 | max:2299',
            'city' => 'required | string | max:255',
            'address' => 'required | string | max:255',
            'phone_number' => 'required | string | max:255',
        ];
    }
}
