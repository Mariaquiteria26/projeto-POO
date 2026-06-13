@if (session('success'))
    <div style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
@endif

<h1>Lista de Doces</h1>

<a href="{{ route('doces.create') }}">
    Novo Doce
</a>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>

    @foreach($doces as $doce)
    <tr>
        <td>{{ $doce->nome }}</td>
        <td>{{ $doce->descricao }}</td>
        <td>R$ {{ $doce->preco }}</td>

        <td>
            <a href="{{ route('doces.edit', $doce->id) }}">
                Editar
            </a>

            <form action="{{ route('doces.destroy', $doce->id) }}" method="POST" style="display:inline;">
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