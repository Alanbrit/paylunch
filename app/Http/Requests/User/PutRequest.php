<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
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
            "name" => "required|",
            "apellidos" => "required|",
            "numero" => "required|",
            "numero_2" => "required|",
            "saldo" => "integer",
            "email" => "required|unique:users,email,".$this->route("user")->id,
            "id_grupo" => "required|integer",
            "id_escuela" => "required|integer",
        ];
    }
}
