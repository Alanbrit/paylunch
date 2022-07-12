<?php

namespace App\Http\Requests\Menu;

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
            "dia" => "required|min:5|max:500",
            "guisado" => "required|min:5|max:500",
            "sopa_guarnicion" => "required|min:5|max:500",
            "agua" => "required|min:5|max:500",
            "postre" => "required|min:5|max:500"
        ];
    }
}
