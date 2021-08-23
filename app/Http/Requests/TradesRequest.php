<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TradesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type'    => 'string|required|in:buy,sell',
            'user_id' => 'numeric|required',
            'symbol'  => 'string|required',
            'shares'  => 'numeric|required|between:10,30',
            'price'   => 'numeric|required',
        ];
    }
}
