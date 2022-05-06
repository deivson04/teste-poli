<?php
use App\Http\Controllers\SobreviventesController;
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

Route::get('buscar', [SobreviventesController::class, 'index']);
Route::post('store', [SobreviventesController::class, 'store']);
Route::put('atualizar/{id}', [SobreviventesController::class, 'update']);
Route::delete('delete/{id}', [SobreviventesController::class, 'destroy']);