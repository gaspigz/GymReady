<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
            'user' => 'required|string|max:32',
            'password' => 'required|string|max:16',
        ];
    }

    public function getCredentials(){
        $user = $this->get('user');
        if($this->isEmail($user)){ //Si es un correo electronico la solicitud sera con un email
            return [
                'email' => $user,
                'password' => $this->get('password')
            ];
        }
        return $this->only('username', 'password');
    }
    
    public function isEmail($value){
        $factory = $this->container->make(Validation::class);
        return !$factory->make(['user' => $value], ['user' => 'email'])->fails();
    }
}
