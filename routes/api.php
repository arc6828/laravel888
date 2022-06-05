<?php

use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\TambonController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/provinces', [ TambonController::class , 'getProvinces' ]);
Route::get('/amphoes', [TambonController::class , 'getAmphoes' ]);
Route::get('/tambons', [ TambonController::class , 'getTambons' ]);
Route::get('/zipcodes', [TambonController::class, 'getZipcodes'] );

Route::apiResource('book', BookController::class);
Route::apiResource('location', LocationController::class);


Route::post('/sanctum/token', [UserController::class, 'token']);
Route::post('/sanctum/token/register', [UserController::class, 'register']);

