<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\InfoDesaController;
use App\Http\Controllers\StrukturalController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::post('/admin/login', [AdminController::class, 'login'])->middleware('guest');

Route::post('/admin/logout', [AdminController::class, 'logout']);

Route::get('/desa/{desa:id}/', [DesaController::class, 'index']);


Route::middleware('auth')->group(function () {
    Route::get('/desa/e/{desa:id}', [DesaController::class, 'edit']);
    Route::put('/desa/u/{desa:id}', [DesaController::class, 'update']);

    Route::get('/desa/img/e/{desa:id}', [DesaController::class, 'editImg']);
    Route::put('/desa/img/u/{desa:id}', [DesaController::class, 'updateImg']);

    Route::delete('/desa/s/d/{struktural:id}', [StrukturalController::class, 'destroy']);
    Route::get('/desa/s/c/', [StrukturalController::class, 'create']);
    Route::post('/desa/s/s/', [StrukturalController::class, 'store']);
    Route::get('/desa/s/e/{struktural:id}', [StrukturalController::class, 'edit']);
    Route::put('/desa/s/u/{struktural:id}', [StrukturalController::class, 'update']);

    Route::delete('/desa/i/d/{infoDesa:id}', [InfoDesaController::class, 'destroy']);
    Route::get('/desa/i/c/', [InfoDesaController::class, 'create']);
    Route::post('/desa/i/s/', [InfoDesaController::class, 'store']);
    Route::get('/desa/i/e/{infoDesa:id}', [InfoDesaController::class, 'edit']);
    Route::put('/desa/i/u/{infoDesa:id}', [InfoDesaController::class, 'update']);
});
