<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Mostrar o formulário de contato.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('contato'); // Retorna a view do formulário
    }

    /**
     * Processar os dados do formulário de contato.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function handleForm(Request $request)
    {
        // Validar os dados do formulário
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'endereco' => 'required|string|max:255',
            'sexo' => 'required|in:masculino,feminino,outro',
        ]);

        // Aqui você pode processar os dados do formulário,
        // como salvar em um banco de dados ou enviar um e-mail.

        // Retorna a mesma view com os dados recebidos para exibir ao usuário
        return view('contato', ['data' => $validated]);
    }
}
