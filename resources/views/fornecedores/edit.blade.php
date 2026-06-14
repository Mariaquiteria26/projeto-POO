<h1>Editar Fornecedor</h1>

<form action="{{ route('fornecedores.update', $fornecedor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $fornecedor->nome }}" required>
    </div>

    <br>

    <div>
        <label>Telefone:</label>
        <input type="text" name="telefone" value="{{ $fornecedor->telefone }}">
    </div>

    <br>

    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $fornecedor->email }}">
    </div>

    <br>

    <button type="submit">
        Atualizar
    </button>
</form>

<br>

<a href="{{ route('fornecedores.index') }}">
    Voltar
</a>
