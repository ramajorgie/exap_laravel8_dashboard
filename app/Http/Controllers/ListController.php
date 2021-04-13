<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ListController extends Controller
{
    public function list_project(){

        $isi = DB::table('post_project')->get();

        return view('page_layout.list_postproject',['list_project' => $isi]);
    }

    public function update_view_project (Request $request){


        DB::table('post_project')->where('status','Tampilkan')
            ->update([
             'status' => 'Sembunyikan',
        ]);

        DB::table('post_project')->where('id',$request->id)
            ->update([
             'status' => 'Tampilkan',
        ]);
        return redirect()->back();
    }

    public function view_project (Request $request){
        $view_isi = DB::table('post_project')->where('id',$request->id)->get();
        return view('page_views.view_project',['view_project' => $view_isi]);

    }
}
