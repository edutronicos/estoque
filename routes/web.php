<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductListController;
use App\Models\ProductList;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/d', function () {return view('welcome');});
Route::get('/consulta', [ProductListController::class, 'show']);
Route::get('/cad_item', [ProductListController::class, 'create']);
Route::post('/cad_store', [ProductListController::class, 'store']);
Route::get('/entrada', [ProductListController::class, 'return_entrada']);
Route::get('/saida', [ProductListController::class, 'return_saida']);
Route::get('/listasaida', [ProductListController::class, 'listasaida']);
Route::post('/entrada_up', [ProductListController::class, 'update_mais']);
Route::post('/entrada_down', [ProductListController::class, 'update_menos']);
Route::get('/contato', [ProductListController::class, 'contato']);
Route::get('/sobre', [ProductListController::class, 'sobre']);

Route::post('/cadas_forne', [ProductListController::class, 'cad_forne']);
Route::post('/papeis', [ProductListController::class, 'papeis']);

