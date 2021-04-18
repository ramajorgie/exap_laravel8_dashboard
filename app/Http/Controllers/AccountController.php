<?php

namespace App\Http\Controllers;

use App\Models\Account_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AccountController extends Controller
{
    public function add_account(Request $request){
        
         DB::table('users')->insert([
            'name'      => $request->nama,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'status'    => $request->status,
            'foto'      => 'profile909010.png',
          
        ]);
        
        return redirect()->back();

    
    }

    public function view_account(){
        $data = DB::table('users')->get();
        return view('page_layout.multi_level',['data'=>$data]);
    }


    public function update_user_status(Request $request){
        DB::table('users')->where('email',$request->email)
        ->update([
         'status' => $request->input('status'),
         ]);

         return redirect()->back();
    }
}
