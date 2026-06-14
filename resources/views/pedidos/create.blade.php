<h1>Cadastrar Pedido</h1>

<form action="{{ route('pedidos.store') }}" method="POST">
    @csrf

    <div>
        <label>Nome do Cliente:</label>
        <input type="text" name="cliente_nome" required>
    </div>

    <br>

    <div>
        <label>Doce:</label>
        <input type="text" name="doce" required>
    </div>

    <br>

    <div>
        <label>Quantidade:</label>
        <input type="number" name="quantidade" required>
    </div>

    <br>

    <button type="submit">
        Salvar
    </button>
</form>

<br>

<a href="{{ route('pedidos.index') }}">
    Voltar
</a>