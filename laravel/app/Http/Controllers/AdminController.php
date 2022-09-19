<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        if (!isset(auth()->user()->user)){
            return redirect()->to('/login')->with_errors('You must be logged in as admin to access this page');
        }
        if (strtoupper(auth()->user()->user) != 'ADMIN'){

            return redirect()->to('/accessviolation'.'/1'.'/'.auth()->user()->user);
        }
        return view('adminview');
    }
}
