<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

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
        $user->save();
        return redirect('/login')->with('succes','Account created');
        
    }

    
}
