<?php

use App\Http\Controllers\ApiMahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mahasiswa', [ApiMahasiswaController::class, 'get_data_mahasiswa']);
Route::post('mahasiswa/insert_data', [ApiMahasiswaController::class, 'insert_data_mahasiswa']);
Route::post('mahasiswa/update_data/{npm_mahasiswa}', [ApiMahasiswaController::class, 'update_data_mahasiswa']);
Route::post('mahasiswa/delete_data/{npm_mahasiswa}', [ApiMahasiswaController::class, 'delete_data_mahasiswa']);
