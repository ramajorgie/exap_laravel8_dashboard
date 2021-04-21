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

        if( $request->status == 'Tampilkan'){
        
        DB::table('post_project')->where('id',$request->id)
            ->update([
             'status' => 'Sembunyikan',
        ]);
        }
        elseif($request->status == 'Sembunyikan') {
        DB::table('post_project')->where('id',$request->id)
            ->update([
             'status' => 'Tampilkan',
        ]);
        }

        else{
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function view_project (Request $request){
        $view_isi = DB::table('post_project')->where('id',$request->id)->get();
        return view('page_views.view_project',['view_project' => $view_isi]);

    }

    public function view_about(Request $request){
        $view_isi_about = DB::table('post_about')->where('id',$request->id)->get();
        return view('page_views.view_about',['view_about' => $view_isi_about]);
    }
}