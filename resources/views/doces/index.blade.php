<x-app-layout>
    <div class="min-h-screen bg-[#fff7fb] flex text-[#20202a]">

        <aside class="w-[285px] min-h-screen bg-gradient-to-b from-pink-50 to-white border-r border-pink-100 px-6 pt-4 pb-7 flex flex-col justify-between" style="height: 100vh;">
        
    <div>
        <div class="text-center mb-4">
            <img src="{{ asset('img/logo-nova.png') }}" class="w-44 mx-auto mb-2" alt="Mella Doces">

            <div class="flex items-center justify-center gap-2 text-[#e60062] text-sm font-medium">
                <span>Confeitaria Artesanal</span>
                <svg class="w-4 h-4 fill-[#e60062]" viewBox="0 0 24 24">
                    <path d="M12 21s-7-4.35-9.5-8.4C.6 9.5 2.3 5.5 6 5.5c2 0 3.3 1.1 4 2.2 0.7-1.1 2-2.2 4-2.2 3.7 0 5.4 4 3.5 7.1C19 16.65 12 21 12 21z" />
                </svg>
            </div>
        </div>

        <nav class="space-y-2">

    <a href="{{ route('dashboard') }}"
       class="flex items-center gap-4 px-5 py-4 rounded-xl font-semibold transition
       {{ request()->routeIs('dashboard')
            ? 'bg-[#e60062] text-white shadow-lg shadow-pink-200'
            : 'hover:bg-pink-100 text-black' }}">
        <svg class="w-7 h-7 {{ request()->routeIs('dashboard') ? 'text-white' : 'text-[#e60062]' }}"
     fill="currentColor"
     viewBox="0 0 24 24">
            <path d="M12 3 3 10.5V21h6v-6h6v6h6V10.5L12 3z" />
        </svg>
        <span>Dashboard</span>
    </a>

    <a href="{{ route('doces.index') }}"
       class="flex items-center gap-4 px-5 py-3.5 rounded-xl font-semibold transition
       {{ request()->routeIs('doces.*')
            ? 'bg-[#e60062] text-white shadow-lg shadow-pink-200'
            : 'hover:bg-pink-100 text-black' }}">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
            <path d="M8 12h8l-.8 8H8.8L8 12z" />
            <path d="M7.5 12c-.4-2.2 1.4-4 3.3-3.5.4-1.8 2.8-1.8 3.2 0 1.9-.5 3.7 1.3 3.3 3.5" />
            <path d="M10 16h.01M12 16h.01M14 16h.01" />
            <path d="M12 6V4" />
        </svg>
        <span>Doces</span>
    </a>

</nav>

            <a href="{{ route('pedidos.index') }}" class="flex items-center gap-4 px-5 py-3.5 rounded-xl font-semibold hover:bg-pink-100 transition">
                <svg class="w-7 h-7 text-[#e60062]" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                    <path d="M6 8h12l1 12H5L6 8z" />
                    <path d="M9 8V6a3 3 0 0 1 6 0v2" />
                    <path d="M9 11h.01M15 11h.01" />
                </svg>
                <span>Pedidos</span>
            </a>

            <a href="{{ route('fornecedores.index') }}" class="flex items-center gap-4 px-5 py-3.5 rounded-xl font-semibold hover:bg-pink-100 transition">
                <svg class="w-7 h-7 text-[#e60062]" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                    <path d="M3 7h11v10H3z" />
                    <path d="M14 10h4l3 3v4h-7z" />
                    <circle cx="7" cy="19" r="2" />
                    <circle cx="18" cy="19" r="2" />
                </svg>
                <span>Fornecedores</span>
            </a>

            <a href="{{ route('usuarios.index') }}" class="flex items-center gap-4 px-5 py-3.5 rounded-xl font-semibold hover:bg-pink-100 transition">
                <svg class="w-7 h-7 text-[#e60062]" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                    <circle cx="9" cy="8" r="3" />
                    <circle cx="17" cy="9" r="2.5" />
                    <path d="M3 20a6 6 0 0 1 12 0" />
                    <path d="M14 20a5 5 0 0 1 7 0" />
                </svg>
                <span>Usuários</span>
            </a>
        </nav>
    </div>

    <div class="border-t border-pink-100 my-4"></div>
    <form method="POST" action="{{ route('logout') }} "class="pt-10">
        @csrf
        <button type="submit" class="w-full flex items-center gap-4 px-5 py-4 rounded-xl bg-pink-50 hover:bg-pink-100 transition font-semibold">
            <svg class="w-7 h-7 text-[#e60062]" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                <path d="M10 17l5-5-5-5" />
                <path d="M15 12H3" />
            </svg>
            <span>Sair</span>
        </button>
    </form>
</aside>

        <main class="flex-1 p-8">
            @if (session('success'))
                <div class="mb-5 bg-pink-50 border border-pink-200 text-[#e60062] px-5 py-4 rounded-xl font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-4xl font-bold text-[#e60062]">
                        Doces
                    </h1>

                    <p class="text-gray-600 mt-2 text-lg">
                        Gerencie os doces da sua confeitaria
                    </p>
                </div>

                <a href="{{ route('doces.create') }}"
                   class="bg-[#e60062] text-white px-6 py-3 rounded-xl font-semibold shadow-lg shadow-pink-200 hover:bg-pink-700 transition">
                    + Novo Doce
                </a>
            </div>

            <div class="bg-white rounded-3xl border border-pink-100 shadow-sm p-6">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-pink-50 text-[#e60062]">
                            <th class="text-left px-5 py-4 rounded-l-xl">Nome</th>
                            <th class="text-left px-5 py-4">Descrição</th>
                            <th class="text-left px-5 py-4">Preço</th>
                            <th class="text-center px-5 py-4 rounded-r-xl">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($doces as $doce)
                            <tr class="border-b border-pink-100">
                                <td class="px-5 py-4 font-semibold">
                                    {{ $doce->nome }}
                                </td>

                                <td class="px-5 py-4 text-gray-600">
                                    {{ $doce->descricao }}
                                </td>

                                <td class="px-5 py-4 font-semibold text-[#e60062]">
                                    R$ {{ number_format($doce->preco, 2, ',', '.') }}
                                </td>

                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-center gap-3">
                                        <a href="{{ route('doces.edit', $doce->id) }}"
                                           class="bg-pink-100 text-[#e60062] px-4 py-2 rounded-lg font-semibold hover:bg-pink-200 transition">
                                            Editar
                                        </a>

                                        <form action="{{ route('doces.destroy', $doce->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="bg-red-50 text-red-500 px-4 py-2 rounded-lg font-semibold hover:bg-red-100 transition">
                                                Excluir
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</x-app-layout>