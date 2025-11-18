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



route::middleware('auth')->controller(siswaController::class)->group(function(){ // 'group(function)' untuk memberikan middleware auth pada semua rute didalamnya | 'controller()' untuk memberikan class controller yg sama

    Route::get('/siswa','index')->name('siswa.index'); //kode penamaan route 'siswa.index' maksudnya controller siswa function index
    // Route::get('/siswa', function(){
    //     $nama='irul';
    //     return view('siswa.index', compact('nama')); //mengirim data ke view dengan COMPACT
    // });
    // Route::get('/siswa', function(){
    //     return view('siswa.index')->with('nama','irul'); //mengirim data ke view dengan WITH
    // });
    
    Route::post('/siswa', 'store')->name('siswa.store');
    
    Route::get('/siswa/create', 'create')->name('siswa.create');
    
    Route::get('/siswa/{siswa}', 'show')->name('siswa.show'); //kode penamaan route 'siswa.show' maksudnya controller siswa function show
    
    Route::delete('/siswa/{siswa}', 'destroy')->name('siswa.destroy'); //kode penamaan route 'siswa.destroy' maksudnya controller siswa function destroy
});


route::middleware('guest')->controller(authController::class)->group(function(){
    route::get('/auth/login', 'showLogin')->name('auth.showLogin'); //kode penamaan route 'auth.showLogin' maksudnya controller auth function showLogin
    
    route::get('/auth/register', 'showRegister')->name('auth.showRegister'); //kode penamaan route 'auth.showRegister' maksudnya controller auth function showRegister
    
    route::post('/auth/login', 'login')->name('login'); 
    
    route::post('/auth/register', 'register')->name('auth.register'); //kode penamaan route 'auth.register' maksudnya controller auth function register
});

route::post('/auth/logout',[authController::class, 'logout'])->name('logout');

