<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            "name" => "required",
            "apellidos" => "required",
            "numero" => "",
            "numero_2" => "",
            "saldo" => "integer",
            "email" => "required|unique:users",
            "password" => "required",
            "id_grupo" => "required|integer",
            "id_escuela" => "required|integer",
        ];
    }
}
