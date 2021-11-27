<?php

use App\Http\Controllers\PatientsController;
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

Route::prefix('patient')->group(function () {
    Route::get('/add', [PatientsController::class,'add'])->name('add');
    Route::post('/create', [PatientsController::class,'create'])->name('create');
    Route::get('/showAll', [PatientsController::class,'show'])->name('show');
    Route::get('/search', [PatientsController::class,'search'])->name('search');
    Route::post('/find/{id}', [PatientsController::class,'find'])->name('find');
    Route::get('/{id}', [PatientsController::class,'user'])->name('user');
    Route::get('qrcode', [PatientsController::class,'qr'])->name('qr');
});