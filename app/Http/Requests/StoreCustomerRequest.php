<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'user_id'=> 'required | string | max:255',
            //'maganszemely' => '',
            'company' => 'required_if:vezetknev,null',
            'last_name' => 'required_if:cegnev,null',
            'first_name' => 'required_with:vezeteknev',
            'postal_code' => 'required | integer | min:1000 | max:2299',
            'city' => 'required | string | max:255',
            'address' => 'required | string | max:255',
            'phone_number' => 'required | string | max:255',
            'tax_number' => 'required_with:cegnev'
        ];
    }
}
