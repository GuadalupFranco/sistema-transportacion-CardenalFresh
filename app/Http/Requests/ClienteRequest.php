<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            "nombre" => "required|string",
            "apellido_paterno" => "required|string",
            "apellido_materno" => "required|string",
            "edad" => "required|numeric|min:18|max:100",
            "direccion" => "required|string",
            "telefono" => "required|numeric|digits:10",
        ];
    }
}
