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
}
