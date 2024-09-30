<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BarangController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CustomerController::class, 'dashboard']);
Route::get('/masterBarang', [CustomerController::class, 'masterBarang']);
Route::get('/createBarang', [CustomerController::class, 'createBarang']);
Route::post('/barang', [CustomerController::class, 'storeBarang']);
Route::get('/editBarang/{barang}', [CustomerController::class, 'editBarang']);
Route::put('/editBarang/{barang}/submit', [CustomerController::class, 'updateBarang']);
Route::get('/deleteBarang/{barang}', [CustomerController::class, 'deleteBarang']);

Route::get('/masterCustomer', [CustomerController::class, 'masterCustomer']);
Route::get('/createCustomer', [CustomerController::class, 'createCustomer']);
Route::post('/customer', [CustomerController::class, 'storeCustomer']);
Route::get('/editCustomer/{customer}', [CustomerController::class, 'editCustomer']);
Route::put('/editCustomer/{customer}/submit', [CustomerController::class, 'updateCustomer']);
Route::get('/deleteCustomer/{customer}', [CustomerController::class, 'deleteCustomer']);

Route::post('/save-dijual', [BarangController::class, 'saveDijual'])->name('save.dijual');
Route::post('/cariDijual', [BarangController::class, 'cariDijual'])->name('cari.dijual');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
