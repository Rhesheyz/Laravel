<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HitungLuasController;

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



Route::get('/luas-persegi/{sisi}', [HitungLuasController::class, 'persegi']);
Route::get('/luas-persegi-panjang/{panjang}/{lebar}', [HitungLuasController::class, 'persegiPanjang']);
Route::get('/luas-segitiga/{alas}/{tinggi}', [HitungLuasController::class, 'segitiga']);
Route::get('/luas-lingkaran/{radius}', [HitungLuasController::class, 'lingkaran']);
Route::get('/', function () {
    return view('welcome');
});
