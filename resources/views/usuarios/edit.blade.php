<h1>Editar Usuário</h1>

<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nome:</label>
        <input type="text" name="name" value="{{ $usuario->name }}" required>
    </div>

    <br>

    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $usuario->email }}" required>
    </div>

    <br>

    <button type="submit">
        Atualizar
    </button>
</form>

<br>

<a href="{{ route('usuarios.index') }}">
    Voltar
</a>