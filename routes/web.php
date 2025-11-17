<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\siswaController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
})->name('home'); // name('home') = kode untuk memberi nama route



Route::get('/siswa', [siswaController::class, 'index'])->name('siswa.index'); //kode penamaan route 'siswa.index' maksudnya controller siswa function index
// Route::get('/siswa', function(){
//     $nama='irul';
//     return view('siswa.index', compact('nama')); //mengirim data ke view dengan COMPACT
// });
// Route::get('/siswa', function(){
//     return view('siswa.index')->with('nama','irul'); //mengirim data ke view dengan WITH
// });

Route::post('/siswa', [siswaController::class, 'store'])->name('siswa.store');

Route::get('/siswa/create', [siswaController::class, 'create'])->name('siswa.create');

Route::get('/siswa/{siswa}', [siswaController::class, 'show'])->name('siswa.show'); //kode penamaan route 'siswa.show' maksudnya controller siswa function show

Route::delete('/siswa/{siswa}', [siswaController::class, 'destroy'])->name('siswa.destroy'); //kode penamaan route 'siswa.destroy' maksudnya controller siswa function destroy

route::get('/auth/login', [authController::class, 'showLogin'])->name('auth.showLogin'); //kode penamaan route 'auth.showLogin' maksudnya controller auth function showLogin

route::get('/auth/register', [authController::class, 'showRegister'])->name('auth.showRegister'); //kode penamaan route 'auth.showRegister' maksudnya controller auth function showRegister

route::post('/auth/login', [authController::class, 'login'])->name('auth.login'); //kode penamaan route 'auth.login' maksudnya controller auth function login

route::post('/auth/register', [authController::class, 'register'])->name('auth.register'); //kode penamaan route 'auth.register' maksudnya controller auth function register