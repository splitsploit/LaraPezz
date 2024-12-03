<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenTestController;

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

Route::get('/', function () {
    return view('pentest');
});

Route::get('/sql-injection', [PenTestController::class, 'testSqlInjection']);
Route::get('/xss', [PenTestController::class, 'testXss']);
