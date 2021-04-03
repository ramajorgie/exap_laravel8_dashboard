<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post_project(Request $request){
           echo"$request->editor1";
    }
}
