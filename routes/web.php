<?php

use Google\Client;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Sheets;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpreadController;
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
Route::get('/qr-code', [SpreadController::class, 'qrCode']);
Route::get('/{code?}', [SpreadController::class, 'index']);
Route::post('/api/select', [SpreadController::class, 'select2']);
Route::get('/create/qr-code/{code?}', [SpreadController::class, 'createQrCode']);
