<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "name" => "required|string|max:255",
            // |unique ensures that the email is unique in the users table.
            "email" => "required|string|email|max:255|unique:users",
            // password is automatically hashed by the User model's create method.
            // |confirmed ensures that the password field matches with the password_confirmation field.
            "password" => "required|string|min:8|confirmed"
        ];
    }
}
