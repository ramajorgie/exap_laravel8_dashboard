<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DeleteController extends Controller
{
    public function detele_project (Request $request){
        DB::table('post_project')->where('id', '=', $request->id)->delete();
        return redirect()->back();
    }

    public function detele_account (Request $request){
        DB::table('users')->where('id', '=', $request->id)->delete();
        return redirect()->back();
    }

    public function detele_album (Request $request){
        DB::table('post_album')->where('id', '=', $request->id)->delete();
        return redirect()->back();
    }


}
