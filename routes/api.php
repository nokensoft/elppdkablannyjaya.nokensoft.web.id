<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DesaController;
use App\Http\Controllers\api\DistrikController;

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

// DISTRIK
Route::get('distrik', [DistrikController::class, 'index']);
Route::get('distrik/{id}', [DistrikController::class, 'show']);

// DESA
Route::get('desa', [DesaController::class, 'index']);
Route::get('desa/{id}', [DesaController::class, 'show']);
