@extends('layouts.app')

@section('content')
    <h2>Lista de Tarefas</h2>
    <ul class="list-group">
        @foreach($tarefas as $tarefa)
            <li class="list-group-item">
                <h5>{{ $tarefa->titulo }}</h5>
                <p>{{ $tarefa->descricao }}</p>
                <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
