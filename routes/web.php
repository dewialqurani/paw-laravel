<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendonorController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\ResipenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User1Controller;

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
Route::get('/', [HomeController::class, 'index']);
    Route::get('/pendonor', [PendonorController::class, 'index'])->name('pendonor');
    Route::post('/pendonor/insert', [PendonorController::class, 'insert']);
    Route::get('/syarat', [SyaratController::class, 'index']);
    Route::get('/stok', [StokController::class, 'index'])->name('stok');
    Route::get('/resipen', [ResipenController::class, 'index']);
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/detail/{id_donor}', [UserController::class, 'detail']);
    Route::get('/user/pendonor', [UserController::class, 'add']);
    Route::post('/user/pendonor/insert', [UserController::class, 'insert']);
    Route::get('/user/pendonor/edit/{id_donor}', [UserController::class, 'edit']);
    Route::post('/user/pendonor/update/{id_donor}', [UserController::class, 'update']);
    Route::get('/user/delete/{id_donor}', [UserController::class, 'delete']);
    Route::get('/user1', [User1Controller::class, 'index']);
    Route::get('/user1/detail/{id_resi}', [User1Controller::class, 'detail']);
    Route::get('/user1/resipien', [User1Controller::class, 'add']);
    Route::post('/user1/resipien/insert', [User1Controller::class, 'insert']);
    Route::get('/user1/resipien/edit/{id_resi}', [User1Controller::class, 'edit']);
    Route::post('/user1/resipien/update/{id_resi}', [User1Controller::class, 'update']);
    Route::get('/user1/delete/{id_resi}', [User1Controller::class, 'delete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//hak akses untuk admin
