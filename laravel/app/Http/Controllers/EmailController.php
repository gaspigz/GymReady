<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use App\Mail\ReportMail;
use App\Crypt;
use Illuminate\Support\Facades\DB;
use DateTime; 

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

    public function accessViolation(Request $request){
        $ip = $request->ip();
        $date = (new DateTime)->format('Y-m-d');
        DB::insert('insert into reports (user, codigo_reporte, date, ip) values ( ?, ?, ?, ?)', [$request->user, $request->codigo, $date, $ip]);
        $idErrorQuery = DB::table('reports')->select(DB::raw('max(id) as id'))->where('user','=',$request->user)->where('codigo_reporte','=',$request->codigo)->where('date','=',$date)->where('ip','=',$ip)->first();
        
        $title = 'Access violation alert number: ' . $idErrorQuery->id . ' , error code: ' . $request->codigo;
        $body = 'We detected an error with code: ' . $request->codigo . ' in the user: ' . $request->user . ' account. Please check the user account and take the necessary measures. ' . 'DATE: ' . $date . 'IP' . $ip;
        $mailData = [
            'title' => $title,
            'body' => $body,
            'idError' => $idErrorQuery->id
        ];
        Mail::to('gymreadyar@gmail.com')->send(new ReportMail($mailData));
        return redirect('/logout')->withErrors('You dont have access to this page.');
    }
}

