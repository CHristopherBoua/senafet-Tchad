<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription ?? 'Journée Internationale de la Femme 2026 - Inclusion, dignité et participation pour un développement durable et un avenir radieux. Ministère de la Femme et de la Petite Enfance, Tchad.' }}">
    <meta name="keywords" content="SENAFET / JIF 2026, Journée de la Femme, Tchad, Ministère Femme Petite Enfance, inclusion, dignité, participation">
    <meta property="og:title" content="{{ $metaTitle ?? config('app.name') }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Journée Internationale de la Femme 2026 - SENAFET / JIF' }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metaTitle ?? config('app.name') }}">
    <title>{{ $metaTitle ?? config('app.name') }}</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    @endif
    @stack('styles')
    <style>
        :root {
            --jenafet-primary: #C41E3A;
            --jenafet-primary-hover: #a0192f;
            --jenafet-white: #FFFFFF;
            --jenafet-gray-light: #F5F5F5;
            --jenafet-text: #000000;
            --jenafet-text-muted: #333333;
        }
    </style>
</head>
<body class="bg-[#F5F5F5] text-[#333333] antialiased min-h-screen flex flex-col overflow-x-hidden">
    @include('partials.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.floating-buttons')

    @stack('scripts')
</body>
</html>
