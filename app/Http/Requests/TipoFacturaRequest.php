<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoFacturaRequest extends FormRequest
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
          'nombre' => 'required|min:3|max:100|unique:tipo_factura,nombre|regex:/^[\pL\s\-]+$/u'
        ];
    }
}
