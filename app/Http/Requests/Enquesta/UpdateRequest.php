<?php

namespace App\Http\Requests\Enquesta;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|min:2|max:250',
            'descripcio' => 'required|string|min:2|max:6000',
            'data' => 'required|string|min:2|max:250',
        ];
    }
}
