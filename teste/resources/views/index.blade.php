<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <a href="{{ route('create') }}">Adicionar Usuário</a>
    
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} - {{ $user->email }}
                <a href="{{ route('edit', ['user' => $user->id]) }}">Editar</a>
                <form action="{{ route('update', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>

    <!-- Botões de navegação -->
    <div>
        @if ($users->currentPage() > 1)
            <a href="{{ $users->previousPageUrl() }}">Anterior</a>
        @endif

        @if ($users->hasMorePages())
            <a href="{{ $users->nextPageUrl() }}">Próxima</a>
        @endif
    </div>
</body>
</html>
