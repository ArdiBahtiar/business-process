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
Route::get('/masterCustomer', [CustomerController::class, 'masterCustomer']);
Route::post('/save-dijual', [BarangController::class, 'saveDijual'])->name('save.dijual');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
