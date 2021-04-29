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

    public function view_team(){
        $view_team = DB::table('exp_team')->get();
        view('page_layout.edit_exp_team',['data' => $view_team]);
        return view('page_layout.form_exp_team',['data' => $view_team]);
    }

    public function update_team (Request $request){
        if($request->foto == null){
            DB::table('exp_team')->where('id',$request->id)
            ->update([
             'nama'     =>$request->nama,
             'posisi'   =>$request->posisi,
             'biografi' =>$request->biografi
            
            ]);
        }
        else{
            $imageName = time().'.'.$request->foto->extension();  
            $request->foto->move(public_path('assets_foto_exp_team'), $imageName);
            DB::table('exp_team')->where('id',$request->id)
            ->update([
             'nama'     =>$request->nama,
             'posisi'   =>$request->posisi,
             'biografi' =>$request->biografi,
             'foto'     =>$imageName,
            ]);
        }
    
    return redirect('/exp_team');
}

    public function view_visi_misi(){
        $view_visi = DB::table('data_visi_misi')->where('status','visi')->get();
        $view_misi = DB::table('data_visi_misi')->where('status','Misi')->get();
        return view('page_layout.visi_misi',[
            'visi' => $view_visi,
            'misi' => $view_misi
            ]);
    }
} 