@extends('layouts.app')

@section('content')
    <h2>Editar Tarefa</h2>
    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ $tarefa->titulo }}" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control">{{ $tarefa->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Atualizar Tarefa</button>
    </form>
@endsection
