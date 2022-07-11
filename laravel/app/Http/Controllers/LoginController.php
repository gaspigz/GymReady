<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //Es una clase para manejar autenticacion
use Illuminate\Contracts\Validation\Factory as ValidationFactory;


class LoginController extends Controller
{
    public function show(){
        echo 'HOLAAAAAAAA';
        return view('login');
    }

    public function login(LoginRequest $request){
        
        $credentials = $this->getCredentials(); //esto viene de la login request, puede ser el user y la contra o el mail y la contra

        if(!Auth::validate($credentials)){
            echo 'OK2';
            return redirect()->to('/login')->withErrors('Usuario o contraseña incorrectos');      
        }
        echo 'OK3';
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        echo 'OK4';
        Auth::login($user);
        echo 'OK5';
        return view('index');
    }
/*
    public function getCredentials(Request $request){
        $user = $request->get('user');
        if($this->isEmail($user)){ //Si es un correo electronico la solicitud sera con un email
            return [
                'email' => $user,
                'password' => $request->get('password')
            ];
        }
        return $this->only('username', 'password');
    }

    public function isEmail($value){
        $factory = $this->container->make(Validation::class);
        return !$factory->make(['email' => $value], ['email' => 'email'])->fails();
    }

    */

    public function authenticated(Request $request, $user){
       /* if($user->hasVerifiedEmail()){
            return redirect()->to('/');
        }*/
        return view('index');
    }

}
