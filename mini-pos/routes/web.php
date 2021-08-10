<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

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

/*
Route::view('/home','dashboard');
Route::view('/pembelian','pembelian');
Route::view('/barang','barang');
Route::view('/supplier','supplier');
Route::view('/outlet','outlet');
Route::view('/mutasi','mutasi');
*/


// Route::get('/', function () {
//     return view('auth.login');
// });


Route::middleware('auth')->group(function () { //Route untuk halaman yang wajib login dulu
    Route::post('logout', LogoutController::class)->name('logout');
    Route::view('/', 'dashboard');
    Route::view('/dashboard', 'dashboard');
    Route::view('/pembelian', 'pembelian');
    Route::view('/barang', 'barang');
    Route::view('/outlet', 'outlet');
    Route::view('/mutasi', 'mutasi');
    Route::view('/penjualan', 'penjualan');
    Route::get('/customer', [CustomerController::class, 'index']);
    Route::get('supplier', [SupplierController::class, 'index']);
    Route::post('supplier', [SupplierController::class, 'create']);
});

Route::middleware('guest')->group(function () { //Route untuk halaman yang dilarang dikunjungi ketika user sudah login
    //Route::get('register',[RegistrationController::class,'create'])->name('register');
    //Route::post('register',[RegistrationController::class,'store'])->name('register');
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});
