<?php

use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/contato', [ContactController::class, 'showForm']);
Route::post('/contato', [ContactController::class, 'submitForm']);

Route::get('/produto-detalhes', [ProdutoDetalhesController::class, 'create'])->name('produto_detalhes.create');
Route::post('/produto-detalhes', [ProdutoDetalhesController::class, 'store'])->name('produto_detalhes.store');
