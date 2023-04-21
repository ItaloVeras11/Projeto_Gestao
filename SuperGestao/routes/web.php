<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index')->middleware('log.acesso');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');


Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/sair', [LoginController::class, 'sair'])->name('app.sair');
    Route::get('/cliente', [ClienteController::class, 'index'])->name('app.cliente');

    Route::get('/fornecedore', [FornecedoresController::class, 'index'])->name('app.fornecedore');
    Route::post('/fornecedore/listar', [FornecedoresController::class, 'listar'])->name('app.fornecedore.listar');
    Route::get('/fornecedore/listar', [FornecedoresController::class, 'listar'])->name('app.fornecedore.listar');
    Route::get('/fornecedore/adicionar', [FornecedoresController::class, 'adicionar'])->name('app.fornecedore.adicionar');
    Route::post('/fornecedore/adicionar', [FornecedoresController::class, 'adicionar'])->name('app.fornecedore.adicionar');
    Route::get('/forncedor/editar/{id}', [FornecedoresController::class, 'editar'])->name('app.fornecedore.editar');
    Route::get('/forncedor/excluir/{id}', [FornecedoresController::class, 'excluir'])->name('app.fornecedore.excluir');

    Route::get('/produto', [ProdutoController::class, 'index'])->name('app.produto');
    Route::get('/produto/create', [ProdutoController::class, 'create'])->name('app.produto.create');
});

Route::get('/teste{p1}/{p2}', [TesteControlleroller::class, 'teste'])->name('teste');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href= "'.route('site.index').'"> Clique Aqui </a>';
});







