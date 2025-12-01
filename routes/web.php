<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


route::middleware('auth')->controller(ProdukController::class)->group(function(){
    Route::get('/','index')->name('produk.index');

    route::get('/produk/tambah','create')->name('produk.create');

    route::post('/produk','store')->name('produk.store');

    route::get('/produk/edit/{produk}','edit')->name('produk.edit');

    route::put('/produk/{produk}','update')->name('produk.update');

    route::delete('/produk/{produk}','destroy')->name('produk.destroy');
});


route::middleware('guest')->controller(authController::class)->group(function(){
    route::get('/register','showRegister')->name('auth.showRegister');
    
    route::get('/login','showLogin')->name('auth.showLogin');

    route::post('/register','register')->name('register');

    route::post('/login','login')->name('login');

});

route::post('/logout',[authController::class,'logout'])->name('auth.logout');
?>