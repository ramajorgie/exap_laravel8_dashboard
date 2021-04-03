<?php

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
    return view('home.login');
});
// Route::get('/app', function () {
//     return view('page_core.app');
// });
Route::get('/dashboard', function () {
    return view('page_layout.dashboard');
});
Route::get('/post_project', function () {
    return view('page_layout.form_postproject');
});
Route::get('/post_about', function () {
    return view('page_layout.form_postabout');
});
Route::get('/post_album', function () {
    return view('page_layout.form_postalbum');
});


Route::post('/auth', [LoginController::class, 'login']);
Route::post('/insert_postproject',[PostController::class, 'post_project']);
