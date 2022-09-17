<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //Es una clase para manejar autenticacion
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect()->to('/index');
        }
        return view('login');
    }

    public function login(LoginRequest $request){
        
        $verifiedToken = DB::table('users')->where('user', $request->user)->value('verified');
        $credentials = $request->getCredentials(); //esto viene de la login request, puede ser el user y la contra o el mail y la contra
        if($verifiedToken == 0){
            return redirect()->to('/login')->withErrors('User not verified. Please check your email.');
        }
        if(!Auth::validate($credentials)){
            print_r($credentials);
            print_r(Auth::validate($credentials));
            
            return redirect()->to('/login')->withErrors('User or password not valid. ');      
        }else{
            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            Auth::login($user);
            echo $user;
            if(strtoupper($user)=='ADMIN'){
                return $this->authenticated($request, $user, 1);
            }
            return $this->authenticated($request, $user, 0);
        } 
    }

    protected function authenticated(Request $request, $user, $bandera) 
    {
        if($bandera==0){
            return redirect('/index');;
        }else{
            return redirect('/adminview');;
        }
    }
}
