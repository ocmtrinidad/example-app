<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestDojo extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|string|max:255|unique:dojos",
            "location" => "required|string|max:255",
            "description" => "required|string|min:20|max:1000"
        ];
    }
}
