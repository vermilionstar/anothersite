<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CekMemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactusController;

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

// Route::get('/', function () {
//     return view('home.dashboard');
// });


Route::get('/', function () {
    return view('depan.home');
});
Route::get('/', function () {
    return view('home.login');
});

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/contactus', [ContactusController::class, 'index']);
Route::get('/contactus/tambah', [ContactusController::class, 'create']);
Route::post('/contactus/simpan', [ContactusController::class, 'store']);

Route::get('/cek', [CekMemberController::class, 'index']);
Route::post('/hasil',[CekMemberController::class,'cekdata']);

Route::get('/l',[LoginController::class,'index']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/PostLogin',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);

Route::middleware(['auth'])->group(function(){
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/{id}/edit', [UserController::class, 'show']);
Route::get('/user/{id}/hapus', [UserController::class, 'destroy']);
Route::post('/user/{id}/update', [UserController::class, 'update']);

Route::get('/member', [MemberController::class, 'index']);
Route::get('/member/tambah', [MemberController::class, 'create']);
Route::post('/member/simpan', [MemberController::class, 'store']);
Route::get('/member/{id}/edit', [MemberController::class, 'show']);
Route::get('/member/{id}/hapus', [MemberController::class, 'destroy']);
Route::post('/member/{id}/update', [MemberController::class, 'update']);

Route::get('/sepatu', [SepatuController::class, 'index']);
Route::get('/sepatu/tambah', [SepatuController::class, 'create']);
Route::post('/sepatu/simpan', [SepatuController::class, 'store']);
Route::get('/sepatu/{id}/edit', [SepatuController::class, 'show']);
Route::get('/sepatu/{id}/hapus', [SepatuController::class, 'destroy']);
Route::post('/sepatu/{id}/update', [SepatuController::class, 'update']);

Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/tambah', [SupplierController::class, 'create']);
Route::post('/supplier/simpan', [SupplierController::class, 'store']);
Route::get('/supplier/{id}/edit', [SupplierController::class, 'show']);
Route::get('/supplier/{id}/hapus', [SupplierController::class, 'destroy']);
Route::post('/supplier/{id}/update', [SupplierController::class, 'update']);

Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/tambah', [PenjualanController::class, 'create']);
Route::post('/penjualan/simpan', [PenjualanController::class, 'store']);
Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'show']);
Route::get('/penjualan/{id}/hapus', [PenjualanController::class, 'destroy']);
Route::post('/penjualan/{id}/update', [PenjualanController::class, 'update']);
Route::get('/penjualan/cetak', [PenjualanController::class, 'cetak']);
Route::get('/penjualan/{id}/struk', [PenjualanController::class, 'struk']);

});
