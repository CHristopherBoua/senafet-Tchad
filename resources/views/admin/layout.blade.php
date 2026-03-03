<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $metaTitle ?? __('admin.dashboard') }} — {{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    @endif
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-[#0f0f0f] text-white flex-shrink-0 flex flex-col">
            <div class="p-4 border-b border-white/10">
                <a href="{{ route('admin.dashboard') }}" class="font-bold text-lg text-white">{{ config('app.name') }}</a>
                <span class="block text-xs text-white/60 mt-1">{{ __('admin.dashboard') }}</span>
            </div>
            <nav class="p-2 space-y-1 flex-1">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-[#9B2363] text-white' : 'text-white/80 hover:bg-white/10' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 6h6m-3 0v3m0 0v3m0-3h3m-3 0h-3" /></svg>
                    {{ __('admin.dashboard') }}
                </a>
                <a href="{{ route('admin.partenaires.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.partenaires.*') ? 'bg-[#9B2363] text-white' : 'text-white/80 hover:bg-white/10' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    {{ __('admin.partners') }}
                </a>
                <a href="{{ route('admin.sectors.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.sectors.*') ? 'bg-[#9B2363] text-white' : 'text-white/80 hover:bg-white/10' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" /></svg>
                    {{ __('admin.sectors') }}
                </a>
                <a href="{{ route('admin.carousel.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.carousel.*') ? 'bg-[#9B2363] text-white' : 'text-white/80 hover:bg-white/10' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    {{ __('admin.carousel') }}
                </a>
                <a href="{{ route('admin.gallery.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.gallery.*') ? 'bg-[#9B2363] text-white' : 'text-white/80 hover:bg-white/10' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 6h6m-3 0v3m0 0v3m0-3h3m-3 0h-3" /></svg>
                    {{ __('admin.gallery') }}
                </a>
                <a href="{{ route('admin.home-video-section.edit') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.home-video-section.*') ? 'bg-[#9B2363] text-white' : 'text-white/80 hover:bg-white/10' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                    {{ __('admin.video_section') }}
                </a>
                <span class="flex items-center gap-3 px-3 py-2 rounded-lg text-white/50 cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6m4-4v12m0 0l-4-4m4 4l4-4" /></svg>
                    {{ __('admin.news') }} <span class="text-xs">(bientôt)</span>
                </span>
                <span class="flex items-center gap-3 px-3 py-2 rounded-lg text-white/50 cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    {{ __('admin.programme') }} <span class="text-xs">(bientôt)</span>
                </span>
            </nav>
            <div class="p-4 border-t border-white/10 mt-auto">
                <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-white/80 hover:bg-white/10 text-sm">{{ __('admin.site') }}</a>
                <form action="{{ route('admin.logout') }}" method="post" class="mt-2">
                    @csrf
                    <button type="submit" class="flex items-center gap-3 px-3 py-2 rounded-lg text-white/80 hover:bg-red-900/30 w-full text-left text-sm">{{ __('admin.logout') }}</button>
                </form>
            </div>
        </aside>
        <main class="flex-1 overflow-auto">
            <header class="bg-white border-b border-gray-200 px-6 py-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $metaTitle ?? __('admin.dashboard') }}</h2>
            </header>
            <div class="p-6">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 text-green-800 rounded-lg">{{ session('success') }}</div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>
    @stack('scripts')
</body>
</html>
