<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class ProfileControler extends Controller
{
    public function view_profile(){
        $user_cek =  Auth::user()->name ;
        $view_profile = DB::table('users')->where('name',$user_cek)->get();
        return view('page_layout.edit_account',['data'=>$view_profile]);
    }
    

    public function profile_update(Request $request){
        $cek_file_password = $request->password;

        if($cek_file_password == null){
        DB::table('users')->where('id',$request->id)
        ->update([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'status' => $request->input('status'),
         ]);
        }
        else{
        DB::table('users')->where('id',$request->id)
         ->update([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'status' => $request->input('status'),
          'password' => bcrypt($request->password),
         ]);

        }

         return redirect()->back();
    }

    public function update_foto_profile(Request $request){

        $imageName = time().'.'.$request->foto_update->extension();  
        $request->foto_update->move(public_path('assets_foto_profile'), $imageName);

        DB::table('users')->where('email',$request->email)
         ->update([
          'foto' =>$imageName,
         ]);
         return redirect()->back();
    }
}