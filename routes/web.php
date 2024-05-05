<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangController;
use App\Http\Controllers\WarehouseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make somebarang great!
|
*/

Route::get('/', [barangController::class, 'ViewAllbarang'])->middleware('guest');

Route::get('/add/barang', [barangController::class, 'Addbarang']);

Route::post('/store/barang', [barangController::class, 'Storebarang']);

Route::get('/barang/{id}', [barangController::class, 'Viewbarang']);

Route::get('/update/barang/{id}', [barangController::class, 'viewUpdatebarang']);

Route::patch('/save/update/{id}', [barangController::class, 'saveUpdate']);

Route::delete('/delete/barang/{id}', [barangController::class, 'deletebarang']);

Route::get('/add/warehouse', [WarehouseController::class, 'viewAddWarehouse']);

Route::post('/store/warehouse', [WarehouseController::class, 'store']);

Route::get('/barang/warehouse/{id}', [WarehouseController::class, 'viewbarangToWh']);

Route::post('/store/warehouse/{id}', [WarehouseController::class, 'storebarangToWh']);

Route::get('/detail/warehouse', [WarehouseController::class, 'detail']);

Route::get('/register', [AuthController::class, 'viewRegister']);

Route::post('/register/user', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login/user', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout']);