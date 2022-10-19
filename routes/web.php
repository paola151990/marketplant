<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PlantasmedicinalesController;
use App\Http\Controllers\PlantasornamentalesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HerramientasController;
use App\Http\Controllers\SemillasController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PerfilController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   
Route::resource('/perfil_us', PerfilController::class);

Route::resource('/blog', BlogController::class)
->except(['blog.index'])
->middleware('auth');
Route::resource('/plantasmedicinales', PlantasmedicinalesController::class)
->except(['plantasmedicinales.index'])
->middleware('auth');
Route::resource('/plantasornamentales', PlantasornamentalesController::class)
->except(['plantasornamentales.index'])
->middleware('auth');
Route::resource('/semillas', SemillasController::class)
->except(['semillas.create'])
->middleware('auth');
Route::resource('/herramientas', HerramientasController::class)
->except(['herramientas.index'])
->middleware('auth');



Route::get('/', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');


Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');



Route::get('/login', [SesionController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SesionController::class, 'store'])
    ->name('login.store');

    Route::get('/logout', [SesionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


    Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

    Route::resource('/admin', AdminController::class);

