<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TradesController;
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

Route::get('trades',         [TradesController::class, 'index']);
Route::post('trades',        [TradesController::class, 'store']); 
Route::get('trades/{id}',    [TradesController::class, 'show']);
Route::delete('trades/{id}', [TradesController::class, 'notAllowed']);
Route::put('trades/{id}',    [TradesController::class, 'notAllowed']);
Route::patch('trades/{id}',  [TradesController::class, 'notAllowed']);