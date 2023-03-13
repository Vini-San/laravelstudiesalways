<?php

use App\Http\Controllers\Api\PessoaController;
use App\Http\Controllers\Api\TelefonesController;
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

Route::get('pessoas', [PessoaController::class, 'index']);
Route::post('pessoas', [TelefonesController::class, 'add']);
Route::get('pessoas/{id}', [PessoaController::class, 'show']);
Route::get('pessoas/{id}/edit', [PessoaController::class, 'edit']);
Route::put('pessoas/{id}/edit', [PessoaController::class, 'update']);
Route::delete('pessoas/{id}/delete', [PessoaController::class, 'destroy']);

Route::post('telefones', [TelefonesController::class, 'store']);