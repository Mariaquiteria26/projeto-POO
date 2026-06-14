<h1>Editar Pedido</h1>

<form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nome do Cliente:</label>
        <input type="text" name="cliente_nome" value="{{ $pedido->cliente_nome }}" required>
    </div>

    <br>

    <div>
        <label>Doce:</label>
        <input type="text" name="doce" value="{{ $pedido->doce }}" required>
    </div>

    <br>

    <div>
        <label>Quantidade:</label>
        <input type="number" name="quantidade" value="{{ $pedido->quantidade }}" required>
    </div>

    <br>

    <button type="submit">
        Atualizar
    </button>
</form>

<br>

<a href="{{ route('pedidos.index') }}">
    Voltar
</a>