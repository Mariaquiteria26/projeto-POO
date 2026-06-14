@if (session('success'))
    <div style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
@endif

<h1>Lista de Usuários</h1>

<a href="{{ route('usuarios.create') }}">
    Novo Usuário
</a>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    @foreach($usuarios as $usuario)
    <tr>
        <td>{{ $usuario->name }}</td>
        <td>{{ $usuario->email }}</td>

        <td>
            <a href="{{ route('usuarios.edit', $usuario->id) }}">
                Editar
            </a>

            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Excluir
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>