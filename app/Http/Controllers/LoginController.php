<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Illuminate\Events\queueable;


class LoginController extends Controller
{
    public function login (Request $request){
        $cek_account = DB::table('account')->where('email',$request->email)->where('password',$request->password)->count();
        $view_username = DB::table('account')->where('email',$request->email)->get();
        


       
        if($cek_account !=1){

            return Redirect()->back()->with('danger', 'Login Gagal ');
        }
        else{
            foreach($view_username as $username){
                 $data= array(
                 session(['login_status'=>$username->username])
                );
            }
            return view('page_layout.dashboard');
            
        }
    }
}
