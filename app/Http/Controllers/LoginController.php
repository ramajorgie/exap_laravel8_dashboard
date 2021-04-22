<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use function Illuminate\Events\queueable;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function login (Request $request){
        
        // $cek_account_email = DB::table('users')->where('email',$request->email)->count();
        // $cek_account_password = User::where('email',$request->email)->count();
        // if($cek_account_email !=1 ){
        //     return Redirect()->back()->with('danger', 'Email Salah ');
        // }       
        // elseif($cek_account_email !=0){
        //     $view_username = DB::table('users')->where('email',$request->email)->get();
        //     $cek_account_password = User::where('email',$request->email)->firstOrfail();

        //     if (Hash::check($request->password, $cek_account_password->password)){  
        //             foreach($view_username as $username)
        //             {
        //                 $data= array(
        //             );
        //             session(['login_status'=>$username->status]);
                  
        //             }

        //             session(['berhasil_login' => true]);
        //             return redirect('/dashboard');  
        //     }
        //     else{
        //     return Redirect()->back()->with('danger', 'Password Salah ');
        //     }
        // }
         $view_username = DB::table('users')->where('email',$request->email)->get();
         $cek_msg = DB::table('contact')->where('status','Belum Terbaca')->count();
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            foreach($view_username as $username)
                        {
                            $data= array(
                        );
                        session(['login_status'=>$username->status]);
                        session(['login_foto'=>$username->foto]);
                        session(['login_msg'=>$cek_msg]);

                    }
            return redirect('/dashboard');
        }
        return redirect('/login')->with('danger', 'Email/Password Salah ');
    }
    public function logout (Request $request){
        // $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }


    
}