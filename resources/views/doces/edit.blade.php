<h1>Editar Doce</h1>

<form action="{{ route('doces.update', $doce->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $doce->nome }}" required>
    </div>

    <br>

    <div>
        <label>Descrição:</label>
        <textarea name="descricao">{{ $doce->descricao }}</textarea>
    </div>

    <br>

    <div>
        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" value="{{ $doce->preco }}" required>
    </div>

    <br>

    <button type="submit">
        Atualizar
    </button>
</form>

<br>

<a href="{{ route('doces.index') }}">
    Voltar
</a>