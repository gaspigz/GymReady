<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth; //Es una clase para manejar autenticacion
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EmailController;
use Mail;
use DateTime;
use App\Crypt;



class RegisterController extends Controller
{
    public function show(){ //Muestra la vista
        if(Auth::check()){
            return redirect()->route('/index');
        }
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
        $user->verified = 0;
        //$user->save();
        //return redirect('/login')->with('succes','Account created');
        if($this->blankCheck($request)){ //Si es true hay algo en blanco
            return redirect('/register')->withErrors('All fields are required.');
        }
        if($request->password == $request->password_confirmation){
            if($this->ckuniques($request->user, $request->email) || 1==1){
                $tmp = (new DateTime)->format('Y-m-d');
                $crypter2 = new Crypt;
                $user2 = $crypter2->encrypt($request->user);
                $urlGenerada = '/'.'verify/' . $user2 . '/' . $tmp . '/' . $request->email;
                $user->save();
                return redirect($urlGenerada);
                
            }else{
                return redirect('/register')->withErrors('User or email already exists. ');
            }
        }else{
            return redirect('/register')->withErrors('The passwords do not match. ');
        }   
       
    }

    public function verify(Request $request){

        $crypter = new Crypt;
        $user = $crypter->decrypt($request->user);
        $tmp = $request->tmp;
        $todayDate = (new DateTime)->format('Y-m-d');
        if(substr($tmp,0,2) != substr($todayDate,0,2)){
            return redirect('/login')->withErrors('Verification link expired. ');
        }
        DB::table('users')->where('user', $user)->update(['verified' => 1]);
        DB::table('users')->where('user', $user)->update(['email_verified_at' => $todayDate]);
        return redirect('/login')->with('success', "Account successfully verified.");

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

    protected function blankCheck($request){
        if($request->user == '' || $request->email == '' || $request->name == '' || $request->surname == '' || $request->birth_date == '' || $request->password == '' || $request->password_confirmation == ''){
            return true;
        }else{
            return false;
        }
    }

}


