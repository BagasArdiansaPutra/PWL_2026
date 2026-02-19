<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () { return view('welcome'); });

Route::get('/hello', function () {
    return 'Hello World'; });
// Route::get('/hello', [WelcomeController::class,'hello']); 
Route::get('mahasiswa', function ($id) { }); 
Route::post('mahasiswa', function ($id) { }); 
Route::put('mahasiswa', function ($id) { }); 
Route::delete('mahasiswa', function ($id) { }); 
Route::get('mahasiswa/{id}', function ($id) { }); 
Route::put('mahasiswa/{id}', function ($id) { }); 
Route::delete('mahasiswa/{id}', function ($id) { }); 

Route::match(['get', 'post'], '/specialUrl', function () { 
}); 
 
Route::any('/specialMahasiswa', function ($id) { }); 

Route::get('/world', function () {  
    return 'World'; }); 

Route::get('/', function () {
    return ('Selamat Datang'); });

Route::get('/about', function () {  
    return ('Nama: Bagas Ardiansa Putra
            NIM:244107020166'); });

Route::get(	'/user/{name}', function ($name) { 
    return 'Nama saya '.$name; }); 

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; }); 

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id; });

Route::get(	'/user/{name?}', function ($name=null) { 
    return 'Nama saya '.$name;  }); 

Route::get(	'/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; }); 

use App\Http\Controllers\WelcomeController;
Route::get('/hello', [WelcomeController::class, 'hello']);

use App\Http\Controllers\PageController;
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);
