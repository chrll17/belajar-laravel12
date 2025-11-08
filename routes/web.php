<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});



Route::get('/siswa', function(){
    return view('siswa.index', ['nama' => 'irul']); //mengirim data ke view dengan array asosiatif
});
// Route::get('/siswa', function(){
//     $nama='irul';
//     return view('siswa.index', compact('nama')); //mengirim data ke view dengan COMPACT
// });
// Route::get('/siswa', function(){
//     return view('siswa.index')->with('nama','irul'); //mengirim data ke view dengan WITH
// });

Route::get('/siswa/{id}', function($id){
    return view('siswa.id', ['id' => $id]); //mengirim data dari url ke view 
});