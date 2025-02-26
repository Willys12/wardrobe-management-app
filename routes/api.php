<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothController;

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

Route::get('/cloths', [ClothController::class, 'index']);
Route::post('/cloths', [ClothController::class, 'store']);
Route::get('/cloths/{id}', [ClothController::class, 'show']);
Route::put('/cloths/{id}', [ClothController::class, 'update']);
Route::delete('/cloths/{id}', [ClothController::class,'destroy']);
