<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreditRequest extends Request
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
        // check if the method is POST (create)
        if ($this->isMethod('POST')) {
            return [
                "amount" => "required",
                "client_id" => "required",
            ];
        }

        return [
            "amount" => "required",
        ];

    }
}
