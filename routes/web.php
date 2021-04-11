<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('page_view.index');
});

Route::get('/about', [PostController::class,'about']);

Route::get('/blog', function () {
    return view('page_view.blog');
});
Route::get('/contact', function () {
    return view('page_view.contact');
});
Route::get('/service', function () {
    return view('page_view.service');
});
Route::get('/project', function () {
    return view('page_view.project');
});


Route::get('/login', function () {
    return view('home.login');
});

Route::post('login', [LoginController::class, 'login'])->name('login');

// Route::group(['middleware' => 'CekLoginMiddleware'], function() {
Route::group(['middleware' => 'auth'], function() {
    Route::get('/post_project', function () {return view('page_layout.form_postproject');});
    Route::get('/post_about', function () {return view('page_layout.form_postabout');});
    Route::get('/post_album', function () {return view('page_layout.form_postalbum');});
    Route::get('/dashboard', function () {return view('page_layout.dashboard');});
    Route::post('/insert_postproject',[PostController::class, 'post_project']);
    Route::post('/insert_postabout',[PostController::class, 'post_about']);
    Route::post('/insert_postalbum',[PostController::class, 'post_album']);
    Route::post('/insert_postproject',[PostController::class, 'post_project']);
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});