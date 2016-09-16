<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class loyaltyrequest extends Request
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

            'from'=>'required',

            'to'=>'required|after:start_date',

        ];
    }

    public function messages()
    {
        return [

            'from.required' => 'Discount Start date is required',
            'to.required' => 'Discount end is required',

        ];
    }
}
