<?php

use App\Http\Controllers\Api\barangController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make somebarang great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/barang', [barangController::class, 'viewAll']);
Route::get('/{id}/barang', [barangController::class, 'show']);
Route::post('/create/barang', [barangController::class, 'create']);
Route::patch('/update/{id}/barang', [barangController::class, 'update']);
Route::delete('/delete/{id}/barang', [barangController::class, 'delete']);