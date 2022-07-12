<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(){
        Session::flush(); //Libera el fluhjo de la sesion
        Auth::logout();

        return redirect('/login');
    }
}
