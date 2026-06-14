<h1>Cadastrar Usuário</h1>

<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf

    <div>
        <label>Nome:</label>
        <input type="text" name="name" required>
    </div>

    <br>

    <div>
        <label>Email:</label>
        <input type="email" name="email" required>
    </div>

    <br>

    <div>
        <label>Senha:</label>
        <input type="password" name="password" required>
    </div>

    <br>

    <button type="submit">
        Salvar
    </button>
</form>

<br>

<a href="{{ route('usuarios.index') }}">
    Voltar
</a>