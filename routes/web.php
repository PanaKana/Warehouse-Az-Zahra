<?php
use App\Http\Controllers\AdminController;
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

Route::get('/', [AdminController::class, 'index']);

Route::get('/shop', [AdminController::class, 'cekstoktoko']);

Route::get('/warehouse', [AdminController::class, 'cekstokgudang']);

Route::get('/stock', [AdminController::class, 'cekallstok']);

Route::get('/mutasi', [AdminController::class, 'cekmutasi']);

Route::get('/instock', [AdminController::class, 'cekbarangmasuk']);

Route::post('/instock/input', [AdminController::class, 'inputstokgudang']);

Route::post('/mutasi/input', [AdminController::class, 'mutasistok']);
