<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function (){ return 'login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function() { return 'clientes';});
    Route::get('/fornecedores', function() { return 'fornecedores';});
    Route::get('/produtos', function() { return 'produtos';});
});

Route::get('/rota1', function(){
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function(){
    echo 'Rota 2';
})->name('site.rota2');







