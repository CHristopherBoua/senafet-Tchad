<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>{{ config('app.name') }} - {{ __('splash.welcome') }}</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    @endif
    <style>
        .splash-wrapper {
            position: fixed;
            inset: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d1f24 50%, #1a1a1a 100%);
            overflow: hidden;
        }
        .splash-logo-wrap {
            position: relative;
            animation: splashLogoIn 1.4s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            opacity: 0;
            transform: scale(0.3);
        }
        .splash-logo {
            max-width: 280px;
            width: 80vw;
            height: auto;
            filter: drop-shadow(0 0 40px rgba(196, 30, 58, 0.4))
                    drop-shadow(0 0 80px rgba(196, 30, 58, 0.2));
        }
        .splash-text {
            margin-top: 2rem;
            font-family: 'Instrument Sans', sans-serif;
            font-size: clamp(1rem, 3vw, 1.35rem);
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
            letter-spacing: 0.15em;
            text-transform: uppercase;
            animation: splashTextIn 0.8s ease 0.8s forwards;
            opacity: 0;
        }
        .splash-text span {
            color: #C41E3A;
            font-weight: 700;
        }
        .splash-loader {
            margin-top: 2.5rem;
            width: 120px;
            height: 3px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 2px;
            overflow: hidden;
        }
        .splash-loader-bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #C41E3A, #e84a5f);
            border-radius: 2px;
            animation: splashLoader 2.2s ease 0.5s forwards;
        }
        @keyframes splashLogoIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes splashTextIn {
            to {
                opacity: 1;
            }
        }
        @keyframes splashLoader {
            to {
                width: 100%;
            }
        }
        .splash-lang {
            margin-top: 2.5rem;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            align-items: center;
            animation: splashTextIn 0.8s ease 0.8s forwards;
            opacity: 0;
        }
        .splash-lang-title {
            width: 100%;
            font-family: 'Instrument Sans', sans-serif;
            font-size: clamp(0.9rem, 2.5vw, 1.1rem);
            font-weight: 500;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 0.25rem;
            text-align: center;
        }
        .splash-lang-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.25rem;
            font-family: 'Instrument Sans', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0.5rem;
            text-decoration: none;
            transition: background 0.2s, border-color 0.2s, transform 0.15s;
        }
        .splash-lang-btn:hover {
            background: rgba(196, 30, 58, 0.35);
            border-color: rgba(196, 30, 58, 0.6);
            transform: translateY(-2px);
        }
        .splash-lang-btn .flag {
            font-size: 1.5rem;
            line-height: 1;
        }
    </style>
</head>
<body class="bg-[#1a1a1a] text-white antialiased overflow-hidden m-0 p-0">
    <div id="splash" class="splash-wrapper">
        <div class="splash-logo-wrap">
            <img src="{{ asset('images/logo.png') }}" alt="SENAFET 2026" class="splash-logo" />
        </div>
        <p class="splash-text">{{ __('splash.enter_site') }} <span>SENAFET 2026</span></p>
        <div class="splash-lang">
            <p class="splash-lang-title">{{ __('splash.choose_language') }}</p>
            <a href="{{ route('locale.switch', ['locale' => 'fr']) }}?intended={{ urlencode(route('home')) }}" class="splash-lang-btn" title="Français">
                <span class="flag" aria-hidden="true">🇹🇩</span>
                <span>Français</span>
            </a>
            <a href="{{ route('locale.switch', ['locale' => 'en']) }}?intended={{ urlencode(route('home')) }}" class="splash-lang-btn" title="English">
                <span class="flag" aria-hidden="true">🇺🇸</span>
                <span>English</span>
            </a>
            <a href="{{ route('locale.switch', ['locale' => 'ar']) }}?intended={{ urlencode(route('home')) }}" class="splash-lang-btn" title="العربية">
                <span class="flag" aria-hidden="true">🇸🇦</span>
                <span>العربية</span>
            </a>
        </div>
    </div>
</body>
</html>
