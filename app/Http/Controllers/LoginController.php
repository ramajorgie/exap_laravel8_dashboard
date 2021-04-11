<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use function Illuminate\Events\queueable;
use App\Models\User;


class LoginController extends Controller
{
    public function login (Request $request){
        // $cek_account = DB::table('account')->where('email',$request->email)->where('password',$request->password)->count();
        // $view_username = DB::table('account')->where('email',$request->email)->get();

        // if($cek_account !=1){

        //     return Redirect()->back()->with('danger', 'Login Gagal ');
        // }
        // else{
        //     foreach($view_username as $username){
        //          $data= array(
        //          session(['login_status'=>$username->username])
        //         );
        //     }
        //     return redirect('/dashboard');
            
        // }
        $data = User::where('email',$request->email)->firstOrfail();
        if ($data){
            if(Hash::check($request->password, $data->password)){
                return redirect('/dashboard');
            }
        }
        return Redirect('/login')->back()->with('danger', 'Email/Password Salah');
    }

    // public function register (){
    //     return view('page_layout.register');
    // }
}