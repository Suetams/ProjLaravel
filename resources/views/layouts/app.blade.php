<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadro de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <header>
            <h1>Quadro de Tarefas</h1>
            <nav>
                <a href="{{ route('tarefas.index') }}" class="btn btn-primary">Listar Tarefas</a>
                <a href="{{ route('tarefas.create') }}" class="btn btn-success">Adicionar Tarefa</a>
            </nav>
        </header>
        @yield('content')
    </div>
</body>
</html>
