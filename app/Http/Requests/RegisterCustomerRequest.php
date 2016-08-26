<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterCustomerRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            
            'cusTele'=>'required|numeric',
            'CusPW'=>'confirmed|min:5|max:12',
            'CusEmail'=>'required|email',
            'CusNIC'=>'size:10',

        ];
    }

    public function messages()
    {
        return [

            'CusPW.confirmed' => 'The password confirmation does not match',
            'CusPW.min' => 'The password can have minimum of 5 characters',
            'CusPW.max' => 'The password can have maximum of 12 characters',

            
        ];
    }
}
