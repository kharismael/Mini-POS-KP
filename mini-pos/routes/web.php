<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
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


//Route::get('/location',[LocationController::class,'show']);
//Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index']);


Route::middleware('auth')->group(function () { //Route untuk halaman yang wajib login dulu
    Route::post('logout', LogoutController::class)->name('logout');
    Route::view('/', 'dashboard');
    Route::view('/dashboard', 'dashboard');
    Route::view('/barang', 'barang');
    Route::view('/outlet', 'outlet');
    Route::view('/mutasi', 'mutasi.index');
    Route::get('/mutasi/sales', [SaleController::class, 'show']);
    Route::get('/mutasi/purchases', [PurchaseController::class, 'show']);

    Route::get('supplier', [SupplierController::class, 'index']);
    Route::post('supplier', [SupplierController::class, 'create'])->name('createSupplier');
    Route::delete('supplier/{id}', [SupplierController::class, 'delete']);
    Route::put('supplier/{id}', [SupplierController::class, 'update'])->name('updateSupplier');

    Route::get('regency', [LocationController::class, 'getRegency'])->name('getRegency');
    Route::get('district', [LocationController::class, 'getDistrict'])->name('getDistrict');
    Route::get('village', [LocationController::class, 'getVillage'])->name('getVillage');

    Route::get('/customer', [CustomerController::class]);

    Route::get('penjualan', [SaleController::class, 'index']);
    Route::post('penjualan', [SaleController::class, 'create'])->name('createSales');
    Route::get('penjualan/{id}', [SaleController::class, 'sales']);
    Route::post('penjualan/{sale_id}/{product_id}', [SaleController::class, 'saleStore']);
    Route::delete('penjualan/{sale_id}/{pivot_id}', [SaleController::class, 'destroy']);
    Route::delete('penjualan/{id}', [SaleController::class, 'deleteSales']);
    Route::post('penjualan/{id}', [SaleController::class, 'endsales']);

    Route::get('pembelian', [PurchaseController::class, 'index']);
    Route::post('pembelian', [PurchaseController::class, 'create'])->name('createPurchases');
    Route::get('pembelian/{id}', [PurchaseController::class, 'purchases']);
    Route::post('pembelian/{purchase_id}/{product_id}', [PurchaseController::class, 'purchaseStore']);
    Route::delete('pembelian/{purchase_id}/{pivot_id}', [PurchaseController::class, 'purchaseDelete']);
    Route::delete('pembelian/{id}', [PurchaseController::class, 'deletePurchases']);
    Route::post('pembelian/{id}', [PurchaseController::class, 'endpurchases']);

    Route::resource('products', ProductController::class);
});

Route::middleware('guest')->group(function () { //Route untuk halaman yang dilarang dikunjungi ketika user sudah login
    //Route::get('register',[RegistrationController::class,'create'])->name('register');
    //Route::post('register',[RegistrationController::class,'store'])->name('register');
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});
