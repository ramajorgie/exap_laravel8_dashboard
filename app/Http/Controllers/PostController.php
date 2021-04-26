<?php

namespace App\Http\Controllers;

use App\Models\Exp_Model;
use Illuminate\Http\Request;
use App\Models\PostProject_Model;
use Illuminate\Support\Facades\DB;
use App\Models\PostAbout_Model;
use App\Models\PostAlbum_Model;
use App\Models\Visi_Misi_Model;





class PostController extends Controller
{
    public function post_project(Request $request){


        $imageName = time().'.'.$request->file_foto->extension();  
        $request->file_foto->move(public_path('assets_foto_post'), $imageName);

        $post_project                       = new PostProject_Model;
        $post_project->judul_project        = $request->input('judul_project');
        $post_project->isi                  = $request->input('isi');
        $post_project->waktu                = $request->input('waktu');
        $post_project->bahasa               = $request->input('bahasa');
        $post_project->foto                 = $imageName;
        $post_project->status               = 'Sembunyikan';
        $post_project->save();
        
        return redirect()->back()->with('success', 'Post Berhasil Ditambah');
    }

    public function post_about(Request $request){


        DB::table('post_about')->where('bahasa',$request->bahasa)
        ->update([
         'judul_about' => $request->input('judul_about'),
         'isi'         => $request->input('isi_about'),
         'waktu'       => date('Y-m-d'),
         'bahasa'      => $request->input('bahasa'),
         ]);

        // $post_about                       = new PostAbout_Model;
        // $post_about->judul_about          = $request->input('judul_about');
        // $post_about->isi                  = $request->input('isi_about');
        // $post_about->waktu                = date('Y-m-d'); ;
        // $post_about->bahasa               = $request->input('bahasa');
        // $post_about->save();
        
        return redirect()->back()->with('success', 'About Berhasil Diperbaruhi');
    }

    public function update_about_gambar(Request $request){
        $imageName = time().'.'.$request->gambar->extension();  
        $request->gambar->move(public_path('assets_foto_post'), $imageName);

        DB::table('post_about')->where('id',$request->id)
         ->update([
          'gambar' =>$imageName,
         ]);
         
         return redirect()->back()->with('success', 'Gambar Berhasil Diupdate!');
    }

    public function about()
    {   
        $data = DB::table('post_about')->get();
        return view('page_view.about',['data'=>$data]);
    }

    public function post_album(Request $request){

        $imageName = time().'.'.$request->file_foto_album->extension();  
        $request->file_foto_album->move(public_path('assets_foto_post'), $imageName);

        $post_album                       = new Postalbum_Model;
        $post_album->judul_album          = $request->input('judul_album');
        $post_album->foto_album           = $imageName;
        $post_album->status               = 'Tampilkan';
        $post_album->save();
        
        return redirect()->back()->with('success', 'Album Berhasil Ditambah!');
    }

    public function view_about()
    {      
        $data = DB::table('post_about')->get();
        return view('page_layout.form_postabout',['data'=>$data]);
    }


    public function view_album(){
        $data_album = DB::table('post_album')->get();
        return view('page_layout.list_postalbum',['data'=>$data_album]);
    }

    public function view_experience_team()
    {      
        $data = DB::table('post_about')->get();
        return view('page_layout.post_experience_team',['data'=>$data]);
    }

    public function view_project_front(){
        $tampilkan_project = DB::table('post_project')->where('status','Tampilkan')->get();
        return view('page_view.project',['data'=>$tampilkan_project]);
    }

    public function exp_team(Request $request){

        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('assets_foto_exp_team'), $imageName);

        $exp_post                       = new Exp_Model();
        $exp_post->nama                 = $request->input('nama');
        $exp_post->posisi               = $request->input('posisi');
        $exp_post->biografi             = $request->input('biografi');
        $exp_post->foto                 = $imageName;
        $exp_post->waktu                = $request->input('tanggal');
        $exp_post->save();
        
        return redirect()->back()->with('success', 'Berhasil Ditambah!');
    }

    public function visi_misi (Request $request){

        DB::table('data_visi_misi')
         ->insert([
          'visi_misi'     =>$request->isi,
          'status'        =>$request->status,
         ]);
        
        return redirect()->back()->with('success', 'Berhasil Ditambah');
    }


    public function update_project (Request $request){
            if($request->foto == null){
                DB::table('post_project')->where('id',$request->id)
                ->update([
                 'judul_project'     =>$request->judul_project,
                 'isi'               =>$request->isi,
                
                ]);
            }
            else{
                $imageName = time().'.'.$request->foto->extension();  
                $request->foto->move(public_path('assets_foto_post'), $imageName);
                DB::table('post_project')->where('id',$request->id)
                ->update([
                 'judul_project'     =>$request->judul_project,
                 'isi'               =>$request->isi,
                 'foto'              =>$imageName,
                ]);
            }
        
        return redirect('/view_post');
    }
    

}