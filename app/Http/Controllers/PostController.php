<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostProject_Model;
use Illuminate\Support\Facades\DB;
use App\Models\PostAbout_Model;
use App\Models\PostAlbum_Model;



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

}