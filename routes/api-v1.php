<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\TipoIdentificacionController;
use App\Http\Controllers\Api\UsersController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::resource('user', UsersController::class);
Route::resource('blogs', BlogController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('tipoidentificacion', TipoIdentificacionController::class);
Route::resource('producto', ProductController::class);