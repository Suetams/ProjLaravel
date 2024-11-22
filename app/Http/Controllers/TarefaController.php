<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    // Exibe a lista de tarefas
    public function index()
    {
        $tarefas = Tarefa::all(); // Pega todas as tarefas
        return view('tarefas.index', compact('tarefas')); // Passa para a view
    }

    // Exibe o formulário para criar uma nova tarefa
    public function create()
    {
        return view('tarefas.create');
    }

    // Salva a tarefa no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'nullable|string',
        ]);

        // Criação da tarefa
        Tarefa::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
        ]);

        // Redireciona para a lista de tarefas
        return redirect()->route('tarefas.index');
    }

    // Exibe o formulário para editar uma tarefa
    public function edit($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return view('tarefas.edit', compact('tarefa'));
    }

    // Atualiza os dados da tarefa no banco
    public function update(Request $request, $id)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'nullable|string',
        ]);

        // Atualização da tarefa
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
        ]);

        // Redireciona para a lista de tarefas
        return redirect()->route('tarefas.index');
    }

    // Exclui uma tarefa
    public function destroy($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();

        // Redireciona para a lista de tarefas
        return redirect()->route('tarefas.index');
    }
}
