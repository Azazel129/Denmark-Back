<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FactController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\MonarchController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

Route::get('/facts', [FactController::class, 'index']);
Route::get('/facts/{id}', [FactController::class, 'show']);

Route::get('/histories', [HistoryController::class, 'index']);
Route::get('/histories/{id}', [HistoryController::class, 'show']);

Route::get('/monarchs', [MonarchController::class, 'index']);
Route::get('/monarchs/{id}', [MonarchController::class, 'show']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::apiResource('users', UserController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
