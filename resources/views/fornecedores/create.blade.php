<h1>Cadastrar Fornecedor</h1>

<form action="{{ route('fornecedores.store') }}" method="POST">
    @csrf

    <div>
        <label>Nome:</label>
        <input type="text" name="nome" required>
    </div>

    <br>

    <div>
        <label>Telefone:</label>
        <input type="text" name="telefone">
    </div>

    <br>

    <div>
        <label>Email:</label>
        <input type="email" name="email">
    </div>

    <br>

    <button type="submit">
        Salvar
    </button>
</form>

<br>

<a href="{{ route('fornecedores.index') }}">
    Voltar
</a>