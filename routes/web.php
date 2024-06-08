<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);

Route::resources([
    'cliente' => ClienteController::class,
    'produto' => ProdutoController::class,
    #produtos => ProdutosController::class

]);

Route::get('/cliente/{id}/delete', [ClienteController::class, 'delete']);

Route::get('/produto/{id}/delete', [ProdutoController::class, 'delete'])->name('produto.delete');