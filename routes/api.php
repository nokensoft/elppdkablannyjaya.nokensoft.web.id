<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GetController;


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
Route::get('distrik', [GetController::class, 'getsDataDistrik']);
Route::get('distrik/{id}', [GetController::class, 'getDataDistrik']);

Route::get('desa', [GetController::class, 'getsDataDesa']);
Route::get('desa/{id}', [GetController::class, 'getDataDesa']);


// DESA
// Route::get('desa', [DesaController::class, 'index']);
// Route::get('desa/{id}', [DesaController::class, 'show']);
