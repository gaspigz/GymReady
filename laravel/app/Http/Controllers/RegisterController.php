<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth; //Es una clase para manejar autenticacion
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    public function show(){ //Muestra la vista
        return view('register');
    } 

    public function register(Request $request){
        
        $user = new User;
        $user->user = $request->user;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->birth_date = $request->birth_date;
        $user->password = bcrypt($request->password);
        //$user->save();
        //return redirect('/login')->with('succes','Account created');
        if($request->password == $request->password_confirmation){
            if($this->ckuniques($request->user, $request->email)){
                $user->save();
                return redirect('/login')->with('succes','Account created');
            }else{
                return redirect('/register')->with('error','User or email already exists');
            }
        }else{
            return redirect('/register')->with('error','Passwords do not match');
        }   
        /*
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect('/login')->with('success', "Account successfully registered.");
        */
    }

    protected function ckuniques($user, $email){
        if(DB::table('users')->where('user', $user)->exists()){
            return false;
        }else
        if(DB::table('users')->where('email', $email)->exists()){
            return false;
        }else{
            return true;
        }
    }

}


