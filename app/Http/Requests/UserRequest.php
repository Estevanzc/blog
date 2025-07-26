<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $rules = [
            "name" => ["required", "min:3", "max:25"],
            "email" => ["required", "email"],
            "birth" => ["nullable", "date"],
            "sex" => ["nullable"],
            "description" => ["nullable"],
            "banner" => ["nullable", 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            "photo" => ["nullable", 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            "ocupation_id" => ["nullable"],
        ];
        if ($this->isMethod("post")) {
            $rules["email"][] = Rule::unique("users", "email");
            $rules["password"] = ["required", "confirmed", "max:50", Password::min(5)->letters()->numbers()];
        }
        return $rules;
    }
}
