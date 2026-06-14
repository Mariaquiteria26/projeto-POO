<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mella Doces</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700|playfair-display:700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <main class="min-h-screen bg-gradient-to-br from-pink-100 via-rose-50 to-pink-200 flex items-center justify-center px-6 py-4 overflow-hidden">

        <section class="w-full max-w-6xl min-h-[620px] max-h-[90vh] bg-white rounded-[28px] shadow-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2">

            <div
                class="hidden lg:flex flex-col items-center justify-center text-center relative overflow-hidden bg-pink-100"
                style="background-image: url('/img/pattern-mella.png'); background-size: cover; background-position: center;"
            >
                <div class="absolute inset-0 bg-pink-100/20"></div>

                <div class="relative z-10 -mt-16">
    <img
        src="{{ asset('img/logo-nova.png') }}"
        alt="Logo Mella Doces"
        class="w-[350px] mx-auto drop-shadow-lg"
    >
</div>

                <div class="absolute bottom-0 left-0 right-0 h-28 bg-pink-300/45 rounded-t-[50%] flex items-center justify-center">
                    <p class="text-xl text-amber-900 font-medium">
                        Transformando momentos em memórias doces.
                    </p>
                </div>
            </div>

            <div class="flex flex-col justify-center bg-white px-12 py-10">
                {{ $slot }}
            </div>

        </section>

    </main>
</body>
</html>