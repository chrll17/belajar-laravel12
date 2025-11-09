<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});



Route::get('/siswa', function(){
    // $data_siswa = [
    //     ['nama'=>'irul','nilai'=>80,'id'=>'001'],
    //     ['nama'=>'anwar','nilai'=>50,'id'=>'002']
    // ];

    // $data_siswa=Siswa::all(); //mengambil semua data dari model

    $data_siswa=Siswa::orderby('nilai','desc')->get(); //mengambil data dari model (model mengambil data dari database) dari urutan nilai terbesar

    return view('siswa.index', ['data_siswa' => $data_siswa]); //mengirim data ke view dengan array asosiatif
});
// Route::get('/siswa', function(){
//     $nama='irul';
//     return view('siswa.index', compact('nama')); //mengirim data ke view dengan COMPACT
// });
// Route::get('/siswa', function(){
//     return view('siswa.index')->with('nama','irul'); //mengirim data ke view dengan WITH
// });

Route::get('/siswa/{id}', function($id){
    $siswa=Siswa::findorfail($id); //menangkap data id yg dikirim dari siswa.index
    return view('siswa.id', ['siswa' => $siswa]); //mengirim data ke view 
});