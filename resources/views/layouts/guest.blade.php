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

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #fff1f8, #ffffff, #fbcfe8);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Figtree, sans-serif;
        }

        .login-card {
            width: 82%;
            max-width: 1400px;
            height: 800px;
            background: white;
            border-radius: 36px;
            overflow: hidden;
            box-shadow: 0 25px 80px rgba(0,0,0,0.18);
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .login-left {
            position: relative;
            overflow: hidden;
            background: #ffe4ef;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.75;
        }

        .login-logo {
            position: relative;
            z-index: 2;
            width: 300px;
            margin-top: -110px;
            filter: drop-shadow(0 12px 12px rgba(0,0,0,0.15));
        }

        .login-curve {
            position: absolute;
            left: 50%;
            bottom: -90px;
            transform: translateX(-50%);
            width: 900px;
            height: 260px;
            background: rgba(244, 114, 182, 0.35);
            border-radius: 50% 50% 0 0;
        }

        .login-phrase {
            position: absolute;
            bottom: 55px;
            left: 0;
            right: 0;
            text-align: center;
            color: #78350f;
            font-size: 24px;
            z-index: 3;
        }

        .login-right {
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 56px;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="login-left">
            <img src="{{ asset('img/pattern-mella.png') }}" class="login-bg" alt="">
            <img src="{{ asset('img/logo-nova.png') }}" class="login-logo" alt="Logo Mella Doces">

            <div class="login-curve"></div>

            <p class="login-phrase">
                O doce que "Mella" sua boca.
            </p>
        </div>

        <div class="login-right">
            {{ $slot }}
        </div>
    </div>
</body>
</html>