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
            <a href="{{ route('dashboard') }}" class="flex items-center gap-4 bg-[#e60062] text-white px-5 py-4 rounded-xl font-semibold shadow-lg shadow-pink-200">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 3 3 10.5V21h6v-6h6v6h6V10.5L12 3z" />
                </svg>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('doces.index') }}" class="flex items-center gap-4 px-5 py-3.5 rounded-xl font-semibold hover:bg-pink-100 transition">
                <svg class="w-7 h-7 text-[#e60062]" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                    <path d="M8 12h8l-.8 8H8.8L8 12z" />
                    <path d="M7.5 12c-.4-2.2 1.4-4 3.3-3.5.4-1.8 2.8-1.8 3.2 0 1.9-.5 3.7 1.3 3.3 3.5" />
                    <path d="M10 16h.01M12 16h.01M14 16h.01" />
                    <path d="M12 6V4" />
                </svg>
                <span>Doces</span>
            </a>

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
    <form method="POST" action="{{ route('logout') }}"class="pt-10">
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

        <main class="flex-1">
            <header class="h-[100px] bg-white border-b border-pink-100 px-9 flex items-center justify-between">
                <div class="flex items-center gap-7">
                    <svg class="w-8 h-8 text-[#6b4652]" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <h1 class="text-2xl font-bold text-[#e60062]">
                        Dashboard
                    </h1>
                </div>

                <div class="flex items-center gap-8">
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="relative w-12 h-12 rounded-full flex items-center justify-center text-[#6b4652] hover:bg-pink-50 transition">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 7h18s-3 0-3-7" />
                                <path d="M13.7 21a2 2 0 0 1-3.4 0" />
                            </svg>

                            <span class="absolute -top-1 -right-1 bg-[#e60062] text-white text-xs w-5 h-5 rounded-full flex items-center justify-center">
                                
                            </span>
                        </button>

                        <div x-show="open" @click.outside="open = false" class="absolute right-0 mt-3 w-72 bg-white rounded-2xl shadow-xl border border-pink-100 p-5 z-20">
                            <h3 class="font-bold text-gray-900 mb-2">Notificações</h3>
                            <p class="text-sm text-gray-500">Nenhuma notificação registrada.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-full bg-[#e60062] text-white flex items-center justify-center font-bold text-xl">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>

                        <div>
                            <p class="font-bold text-lg">{{ Auth::user()->name }}</p>
                            <p class="text-gray-500">Administrador(a)</p>
                        </div>

                        <svg class="w-5 h-5 text-[#6b4652]" fill="none" stroke="currentColor" stroke-width="2.3" viewBox="0 0 24 24">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </div>
                </div>
            </header>

            <div class="p-8 space-y-6">

                <section class="bg-pink-50/70 border border-pink-100 rounded-2xl px-12 py-8 grid grid-cols-1 lg:grid-cols-2 items-center">
                    <div>
                        <h2 class="text-4xl font-bold text-[#e60062] mb-5">
                            Bem-vindo(a) à Mella Doces!
                        </h2>

                        <p class="text-gray-600 text-xl leading-relaxed">
                            Aqui você gerencia sua confeitaria com amor,<br>
                            organização e muito sabor!
                        </p>
                    </div>

                    <div class="hidden lg:flex justify-center">
                        <img src="{{ asset('img/bolo-dashboard.png') }}" class="w-80" alt="Bolo decorativo">
                    </div>
                </section>

                @php
                $cards = [
                    ['titulo' => 'Doces', 'valor' => \App\Models\Doce::count(), 'texto' => 'cadastrados', 'icone' => 'doce', 'rota' => route('doces.index')],
                    ['titulo' => 'Pedidos', 'valor' => \App\Models\Pedido::count(), 'texto' => 'cadastrados', 'icone' => 'pedido', 'rota' => route('pedidos.index')],
                    ['titulo' => 'Fornecedores', 'valor' => \App\Models\Fornecedor::count(), 'texto' => 'cadastrados', 'icone' => 'fornecedor', 'rota' => route('fornecedores.index')],
                    ['titulo' => 'Usuários', 'valor' => \App\Models\User::count(), 'texto' => 'ativos', 'icone' => 'usuario', 'rota' => route('usuarios.index')],
                ];
                $atividades = collect()
                    ->merge(\App\Models\Doce::orderByDesc('id')->take(5)->get()->map(fn($item) => [
                        'mensagem' => 'Doce cadastrado: ' . $item->nome,
                        'data' => $item->created_at,
                    ]))
                    ->merge(\App\Models\Pedido::orderByDesc('id')->take(5)->get()->map(fn($item) => [
                        'mensagem' => 'Pedido cadastrado para: ' . $item->cliente_nome,
                        'data' => $item->created_at,
                    ]))
                    ->merge(\App\Models\Fornecedor::orderByDesc('id')->take(5)->get()->map(fn($item) => [
                        'mensagem' => 'Fornecedor cadastrado: ' . $item->nome,
                        'data' => $item->created_at,
                    ]))
                    ->merge(\App\Models\User::orderByDesc('id')->take(5)->get()->map(fn($item) => [
                        'mensagem' => 'Usuário cadastrado: ' . $item->name,
                        'data' => $item->created_at,
                    ]))
                    ->sortByDesc('data')
                    ->take(5);
                @endphp

                <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
                    @foreach ($cards as $card)
                    <div class="bg-white border border-pink-100 rounded-2xl p-6 shadow-sm">
                        <div class="flex items-center gap-5 mb-5">
                            <div class="w-20 h-20 rounded-full bg-pink-100 flex items-center justify-center text-[#e60062]">
                                @if ($card['icone'] === 'doce')
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path d="M8 12h8l-.8 8H8.8L8 12z" />
                                    <path d="M7.5 12c-.4-2.2 1.4-4 3.3-3.5.4-1.8 2.8-1.8 3.2 0 1.9-.5 3.7 1.3 3.3 3.5" />
                                    <path d="M10 16h.01M12 16h.01M14 16h.01" />
                                    <path d="M12 6V4" />
                                </svg>
                                @elseif ($card['icone'] === 'pedido')
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path d="M6 8h12l1 12H5L6 8z" />
                                    <path d="M9 8V6a3 3 0 0 1 6 0v2" />
                                    <path d="M9 11h.01M15 11h.01" />
                                </svg>
                                @elseif ($card['icone'] === 'fornecedor')
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path d="M3 7h11v10H3z" />
                                    <path d="M14 10h4l3 3v4h-7z" />
                                    <circle cx="7" cy="19" r="2" />
                                    <circle cx="18" cy="19" r="2" />
                                </svg>
                                @else
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <circle cx="9" cy="8" r="3" />
                                    <circle cx="17" cy="9" r="2.5" />
                                    <path d="M3 20a6 6 0 0 1 12 0" />
                                    <path d="M14 20a5 5 0 0 1 7 0" />
                                </svg>
                                @endif
                            </div>

                            <div>
                                <h3 class="text-xl font-bold">{{ $card['titulo'] }}</h3>
                                <p class="text-4xl font-bold text-[#e60062]">{{ $card['valor'] }}</p>
                                <p class="text-gray-500">{{ $card['texto'] }}</p>
                            </div>
                        </div>

                        <a href="{{ $card['rota'] }}" class="block text-center bg-pink-50 text-[#e60062] font-semibold py-3 rounded-xl hover:bg-pink-100 transition">
                            Ver detalhes →
                        </a>
                    </div>
                    @endforeach
                </section>

                <section class="bg-white border border-pink-100 rounded-2xl shadow-sm p-7">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-12 h-12 rounded-xl bg-pink-100 text-[#e60062] flex items-center justify-center">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                                <path d="M9 11l3 3L22 4" />
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                            </svg>
                        </div>

                        <h3 class="text-2xl font-bold">
                            Atividades recentes
                        </h3>
                    </div>

                    <div class="border-t border-dashed border-pink-300 pt-6">

    @if($atividades->count() > 0)

        <div class="space-y-4">

            @foreach($atividades as $atividade)

                <div class="flex justify-between items-center bg-pink-50 rounded-xl px-5 py-4 border border-pink-100">

                    <div class="flex items-center gap-3">

                        <div class="w-3 h-3 rounded-full bg-pink-500"></div>

                        <span class="text-gray-700 font-medium">
                            {{ $atividade['mensagem'] }}
                        </span>

                    </div>

                    <span class="text-sm text-gray-500">
                        {{ $atividade['data']->format('d/m/Y H:i') }}
                    </span>

                </div>

            @endforeach

        </div>

    @else

        <div class="flex flex-col md:flex-row items-center justify-center gap-12">

            <img src="{{ asset('img/atividades-dashboard.png') }}" class="w-64" alt="Atividades recentes">

            <div>
                <h4 class="text-2xl font-bold text-[#e60062] mb-3">
                    Nenhuma atividade registrada ainda.
                </h4>

                <p class="text-gray-600 text-lg leading-relaxed">
                    Comece cadastrando seus doces para<br>
                    acompanhar as movimentações do sistema.
                </p>
            </div>

        </div>

    @endif

</div>
                </section>

            </div>
        </main>
    </div>
</x-app-layout>