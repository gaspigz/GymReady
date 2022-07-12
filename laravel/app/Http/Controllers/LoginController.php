<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //Es una clase para manejar autenticacion
use Illuminate\Contracts\Validation\Factory as ValidationFactory;


class LoginController extends Controller
{
    public function show(){
        return view('login');
    }

    public function login(LoginRequest $request){
        
        $credentials = $request->getCredentials(); //esto viene de la login request, puede ser el user y la contra o el mail y la contra

        if(!Auth::validate($credentials)){
            print_r($credentials);
            print_r(Auth::validate($credentials));
            
            return redirect('/login');      
        }else{
            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            Auth::login($user);
            echo $user;
            return $this->authenticated($request, $user);
        } 
    }

    protected function authenticated(Request $request, $user) 
    {
        return redirect('/index');
    }
}
