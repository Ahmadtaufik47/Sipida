<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DesaController;
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

Route::get('/desa/{desa:id}', [DesaController::class, 'getStruktural']);

Route::get('/admin', [AdminController::class, 'index']);

Route::post('/admin/login', [AdminController::class, 'login']);

Route::post('/admin/logout', [AdminController::class, 'logout']);

Route::resource('/desa')
