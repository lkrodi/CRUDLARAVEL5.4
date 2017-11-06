<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//para usar la autorizacion de este request, aisgnarlo a true.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //Al colocarlo como required le indicamo que estos son campos obligatorios
        return [
            'name' => 'required',
            'short' => 'required',
            'body' => 'required'
        ];
    }
}
