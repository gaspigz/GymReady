<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use App\Crypt;
  
class EmailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function verify(Request $request)
    {
        $crypter = new Crypt;


        $mailData = [
            'title' => 'Verificatiom email from GYM READY',
            'body' => 'Please click the link below to verify your account: ',
            'url' => 'https://gymreadyweb.ddev.site/verify/' . $request->user . '/' . $request->tmp
        ];
         
        Mail::to($request->email)->send(new DemoMail($mailData));
           
        return redirect('/login')->withSuccess('Account created, check your email to verify your account.');
        
    }
}

