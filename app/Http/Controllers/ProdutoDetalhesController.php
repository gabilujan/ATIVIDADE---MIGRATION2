<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoDetalhe;
use App\Models\Produto;

class ProdutoDetalhesController extends Controller
{
    /**
     * Mostrar o formulário para adicionar detalhes do produto.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $produtos = Produto::all(); // Obtém todos os produtos para listar no formulário
        return view('produto_detalhes.create', compact('produtos'));
    }

    /**
     * Armazenar os detalhes do produto no banco de dados.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validar os dados do formulário
        $validated = $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'comprimento' => 'required|numeric',
            'largura' => 'required|numeric',
            'altura' => 'required|numeric',
        ]);

        // Criar um novo registro de detalhe do produto
        ProdutoDetalhe::create($validated);

        // Redirecionar com uma mensagem de sucesso
        return redirect()->route('produto_detalhes.create')->with('success', 'Detalhes do produto adicionados com sucesso!');
    }
}
