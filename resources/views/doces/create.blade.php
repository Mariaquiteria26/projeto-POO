<h1>Cadastrar Doce</h1>

<form action="{{ route('doces.store') }}" method="POST">
    @csrf

    <div>
        <label>Nome:</label>
        <input type="text" name="nome" required>
    </div>

    <br>

    <div>
        <label>Descrição:</label>
        <textarea name="descricao"></textarea>
    </div>

    <br>

    <div>
        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" required>
    </div>

    <br>

    <button type="submit">
        Salvar
    </button>
</form>

<br>

<a href="{{ route('doces.index') }}">
    Voltar
</a>