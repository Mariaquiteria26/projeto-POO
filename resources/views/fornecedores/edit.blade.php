<x-app-layout>
<div class="min-h-screen flex items-center justify-center px-4 py-10">

    <div class="w-full max-w-2xl bg-white rounded-3xl shadow-lg p-10">

        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-[#e60062]">
                Editar Fornecedor
            </h1>
            <p class="text-gray-400 text-sm mt-2">
                Atualize as informações do fornecedor.
            </p>
        </div>

        <div class="border-t border-gray-100 mb-6"></div>

        <form action="{{ route('fornecedores.update', $fornecedor->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-5">

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Nome
                    </label>
                    <input
                        type="text"
                        name="nome"
                        required
                        value="{{ $fornecedor->nome }}"
                        placeholder="Ex: Fornecedor ABC"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#e60062] focus:outline-none text-sm text-gray-700 placeholder-gray-300">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Telefone
                    </label>
                    <input
                        type="text"
                        name="telefone"
                        value="{{ $fornecedor->telefone }}"
                        placeholder="Ex: (85) 99999-9999"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#e60062] focus:outline-none text-sm text-gray-700 placeholder-gray-300">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        value="{{ $fornecedor->email }}"
                        placeholder="Ex: contato@fornecedor.com"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#e60062] focus:outline-none text-sm text-gray-700 placeholder-gray-300">
                </div>

            </div>

            <div class="border-t border-gray-100 mt-10 mb-6"></div>

            <div class="flex justify-end gap-3">

                <a href="{{ route('fornecedores.index') }}"
                    class="px-6 py-3 rounded-xl border border-gray-200 text-gray-600 text-sm font-semibold hover:bg-gray-50 transition">
                    Cancelar
                </a>

                <button
                    type="submit"
                    class="px-6 py-3 rounded-xl bg-[#e60062] text-white text-sm font-semibold hover:bg-pink-700 transition shadow-md shadow-pink-200">
                    Atualizar Fornecedor
                </button>

            </div>

        </form>

    </div>

</div>
</x-app-layout>