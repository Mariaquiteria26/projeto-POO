<x-guest-layout>
    <div class="w-full max-w-lg mx-auto">

        <div class="text-center mb-5">
            <h2 style="font-family: 'Playfair Display', serif;" class="text-4xl font-extrabold text-pink-600 mb-3">
                Crie sua conta!
            </h2>

            <div class="flex items-center justify-center gap-4 text-pink-500 mb-5">
                <span class="w-20 h-px bg-pink-300"></span>

                <svg class="w-4 h-4 fill-pink-500" viewBox="0 0 24 24">
                    <path d="M12 21s-7-4.35-9.5-8.4C.6 9.5 2.3 5.5 6 5.5c2 0 3.3 1.1 4 2.2 0.7-1.1 2-2.2 4-2.2 3.7 0 5.4 4 3.5 7.1C19 16.65 12 21 12 21z"/>
                </svg>

                <span class="w-20 h-px bg-pink-300"></span>
            </div>

            <p class="text-lg text-amber-900">
                Cadastre-se para acessar o sistema
            </p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-3">
            @csrf

            <div>
                <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">
                    Nome
                </label>

                <div class="relative">
                    <svg class="absolute left-5 top-1/2 -translate-y-1/2 w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"></path>
                        <path d="M4 20a8 8 0 0 1 16 0"></path>
                    </svg>

                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="Digite seu nome"
                        class="w-full pl-14 pr-4 py-3 rounded-xl border border-gray-300 text-gray-700 focus:border-pink-500 focus:ring-pink-500 outline-none"
                    >
                </div>

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">
                    E-mail
                </label>

                <div class="relative">
                    <svg class="absolute left-5 top-1/2 -translate-y-1/2 w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                        <path d="M3 7l9 6 9-6"></path>
                    </svg>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="username"
                        placeholder="Digite seu e-mail"
                        class="w-full pl-14 pr-4 py-3 rounded-xl border border-gray-300 text-gray-700 focus:border-pink-500 focus:ring-pink-500 outline-none"
                    >
                </div>

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-gray-900 mb-2">
                    Senha
                </label>

                <div class="relative">
                    <svg class="absolute left-5 top-1/2 -translate-y-1/2 w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="5" y="11" width="14" height="10" rx="2"></rect>
                        <path d="M8 11V8a4 4 0 0 1 8 0v3"></path>
                    </svg>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Digite sua senha"
                        class="w-full pl-14 pr-4 py-3 rounded-xl border border-gray-300 text-gray-700 focus:border-pink-500 focus:ring-pink-500 outline-none"
                    >
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-semibold text-gray-900 mb-2">
                    Confirmar senha
                </label>

                <div class="relative">
                    <svg class="absolute left-5 top-1/2 -translate-y-1/2 w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="5" y="11" width="14" height="10" rx="2"></rect>
                        <path d="M8 11V8a4 4 0 0 1 8 0v3"></path>
                    </svg>

                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        placeholder="Confirme sua senha"
                        class="w-full pl-14 pr-4 py-3 rounded-xl border border-gray-300 text-gray-700 focus:border-pink-500 focus:ring-pink-500 outline-none"
                    >
                </div>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <button
                type="submit"
                class="w-full bg-pink-600 hover:bg-pink-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-pink-200 transition"
            >
                Registrar
            </button>

            <div class="flex items-center gap-4 text-gray-400">
                <div class="flex-1 h-px bg-gray-200"></div>
                <span class="text-sm">Já tem uma conta?</span>
                <div class="flex-1 h-px bg-gray-200"></div>
            </div>

            <a
                href="{{ route('login') }}"
                class="block w-full text-center border border-pink-500 text-pink-600 font-bold py-4 rounded-xl hover:bg-pink-50 transition"
            >
                Entrar
            </a>
        </form>

        <p class="text-center text-sm text-amber-900 mt-4">
            Mella Doces © 2026 • Por Mariah
        </p>

    </div>
</x-guest-layout>