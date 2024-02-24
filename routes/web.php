<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::middleware('auth')->group(function(){
    Route::get('home', \App\Livewire\Pages\Home::class)->name('home');
    Route::get('profile', \App\Livewire\Pages\Profile::class)->name('profile');
    Route::get('transaksi', \App\Livewire\Pages\Transaksi\Index::class)->name('transaksi.index');

    Route::get('customer', \App\Livewire\Pages\Customer\Index::class)->name('customer.index');
    Route::get('customer/{customer}', \App\Livewire\Pages\Customer\Show::class)->name('customer.show');
});

Route::middleware('guest')->group(function(){
    Route::get('login', \App\Livewire\Auth\Login::class)->name('login');
});
