<?php

use App\Http\Controllers\BairroController;
use App\Http\Controllers\MunicipioController;
use App\Models\Tb_pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\UfController;

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
Route::get('/pessoa', function(){
 dd(Tb_pessoa::all()); 
});

Route::Resource('pessoas', PessoaController::class);
Route::Resource('bairro', BairroController::class);
Route::Resource('municipio', MunicipioController::class);
Route::Resource('uf', UfController::class);
