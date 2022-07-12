<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'user' => 'required|string|min:6|max:16|unique:users,user',
            'email'=> 'required|string|max:32|unique:users,email',
            'name' => 'required|string|max:16',
            'surname' => 'required|string|max:16',
            'birth_date' => 'required|date',
            'password' => 'required|string|min:8|max:16',
            'password_confirmation' => 'required|max:16|same:password'
        ];
    }
}
