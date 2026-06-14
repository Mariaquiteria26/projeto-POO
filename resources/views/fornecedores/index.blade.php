@if (session('success'))
    <div style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
@endif

<h1>Lista de Fornecedores</h1>

<a href="{{ route('fornecedores.create') }}">
    Novo Fornecedor
</a>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    @foreach($fornecedores as $fornecedor)
    <tr>
        <td>{{ $fornecedor->nome }}</td>
        <td>{{ $fornecedor->telefone }}</td>
        <td>{{ $fornecedor->email }}</td>

        <td>
            <a href="{{ route('fornecedores.edit', $fornecedor->id) }}">
                Editar
            </a>

            <form action="{{ route('fornecedores.destroy', $fornecedor->id) }}" method="POST" style="display:inline;">
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