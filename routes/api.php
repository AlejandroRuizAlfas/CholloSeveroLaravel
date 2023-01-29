<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

use App\Http\Controllers\Api\GangaApiController as ApiGangaApiController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Resources\GangaCollection;
use App\Models\Ganga;

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


Route::apiResource('gangas', ApiGangaApiController::class);

Route::post('login', [LoginController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('ganga', [ApiGangaApiController::class, "post"]);
    Route::post('ganga/{id}', [ApiGangaApiController::class, "update"]);
    Route::post('ganga/{id}', [ApiGangaApiController::class, "delete"]);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
