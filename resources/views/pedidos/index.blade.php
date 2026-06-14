@if (session('success'))
    <div style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
@endif

<h1>Lista de Pedidos</h1>

<a href="{{ route('pedidos.create') }}">
    Novo Pedido
</a>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>Cliente</th>
        <th>Doce</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>

    @foreach($pedidos as $pedido)
    <tr>
        <td>{{ $pedido->cliente_nome }}</td>
        <td>{{ $pedido->doce }}</td>
        <td>{{ $pedido->quantidade }}</td>

        <td>
            <a href="{{ route('pedidos.edit', $pedido->id) }}">
                Editar
            </a>

            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display:inline;">
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