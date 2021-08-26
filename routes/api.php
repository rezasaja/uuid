<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaController;
use App\Http\Controllers\KaryawanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('nama/list', [NamaController::class, 'list']);
Route::resource('nama', NamaController::class);
Route::get('karyawan/list', [KaryawanController::class, 'list']);
Route::resource('karyawan', KaryawanController::class);
Route::get('nama/search/{nama}', [NamaController::class, 'search']);
Route::get('karyawan/search/{karyawan}', [KaryawanController::class, 'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
