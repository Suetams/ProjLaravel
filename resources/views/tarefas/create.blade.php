@extends('layouts.app')

@section('content')
    <h2>Adicionar Nova Tarefa</h2>
    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar Tarefa</button>
    </form>
@endsection
