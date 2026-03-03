@php
    $homeVideoSection = $homeVideoSection ?? null;
    $speakers = [
        [
            'name' => __('home.speaker1_name'),
            'title' => __('home.speaker1_title'),
            'image' => asset('images/speakers/speaker1.jpg'),
        ],
        [
            'name' => __('home.speaker2_name'),
            'title' => __('home.speaker2_title'),
            'image' => asset('images/speakers/speaker2.jpg'),
        ],
        [
            'name' => __('home.speaker3_name'),
            'title' => __('home.speaker3_title'),
            'image' => asset('images/speakers/speaker3.jpg'),
        ],
    ];
    $actualites = [
        [
            'id' => 1,
            'title' => __('home.article1_title'),
            'excerpt' => __('home.article1_excerpt'),
            'image' => asset('images/logo.png'),
            'full_content' => __('home.article1_content'),
            'date' => '15 Jan 2026',
        ],
        [
            'id' => 2,
            'title' => __('home.article2_title'),
            'excerpt' => __('home.article2_excerpt'),
            'image' => asset('images/logo.png'),
            'full_content' => __('home.article2_content'),
            'date' => '10 Jan 2026',
        ],
        [
            'id' => 3,
            'title' => __('home.article3_title'),
            'excerpt' => __('home.article3_excerpt'),
            'image' => asset('images/logo.png'),
            'full_content' => __('home.article3_content'),
            'date' => '05 Jan 2026',
        ],
    ];
@endphp

@push('styles')
<style>
.page-de-garde-filigrane {
    background-color: #ffffff;
    background-image: url("{{ asset('images/filigrame.png') }}");
    background-repeat: repeat-x;
    background-position: 0 center;
    background-size: auto 280px;
}
.page-de-garde-filigrane .section-filigrane-blanc {
    background-color: #ffffff;
    background-image: url("{{ asset('images/filigrame.png') }}");
    background-repeat: repeat-x;
    background-position: 0 center;
    background-size: auto 280px;
}
.section-pattern-jif {
    position: relative;
    background: linear-gradient(to right, #9B2363, #BC6C97);
}
.section-pattern-jif::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("{{ asset('images/filigrame-2.jpg') }}");
    opacity: 0.2;
    pointer-events: none;
    z-index: 0;
}
.hero-video-section {
    position: relative;
    width: 100%;
    overflow: hidden;
    background: #0d0d0d;
    height: 100vh;
    min-height: 100vh;
}
.hero-video-section::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 35%, transparent 100%);
    pointer-events: none;
    z-index: 2;
}
/* Bandeau drapeau tchadien (bleu, jaune, rouge) en bas du hero */
.hero-video-section::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 16px;
    background: linear-gradient(to bottom, #002664 0%, #002664 33.33%, #FECB00 33.33%, #FECB00 66.66%, #C8102E 66.66%, #C8102E 100%);
    pointer-events: none;
    z-index: 3;
}
.hero-video-section .hero-video-wrapper {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.hero-video-section .hero-video {
    width: 100%;
    height: 100%;
    min-width: 100%;
    min-height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
}

/* === Animations d'entrée professionnelles === */
@keyframes anim-fade-up {
    from { opacity: 0; transform: translateY(32px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes anim-fade-in {
    from { opacity: 0; }
    to { opacity: 1; }
}
@keyframes anim-scale-in {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
}
@keyframes anim-slide-in-left {
    from { opacity: 0; transform: translateX(-24px); }
    to { opacity: 1; transform: translateX(0); }
}
@keyframes anim-slide-in-right {
    from { opacity: 0; transform: translateX(24px); }
    to { opacity: 1; transform: translateX(0); }
}

.animate-on-scroll {
    opacity: 0;
    transform: translateY(32px);
    transition: none;
}
.animate-on-scroll.animate-section { transition: opacity 0.7s cubic-bezier(0.22, 1, 0.36, 1), transform 0.7s cubic-bezier(0.22, 1, 0.36, 1); }
.animate-on-scroll.animate-content { transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.15s, transform 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.15s; }
.animate-on-scroll.animate-card { transition: opacity 0.5s cubic-bezier(0.22, 1, 0.36, 1), transform 0.5s cubic-bezier(0.22, 1, 0.36, 1); }

.animate-on-scroll.is-visible {
    opacity: 1;
    transform: translateY(0);
}

.animate-on-scroll.anim-fade-in { transform: none; }
.animate-on-scroll.anim-fade-in.is-visible { transform: none; }

.animate-on-scroll.anim-scale-in { transform: scale(0.96); }
.animate-on-scroll.anim-scale-in.is-visible { transform: scale(1); }

.animate-on-scroll.anim-slide-left { transform: translateX(-24px); }
.animate-on-scroll.anim-slide-left.is-visible { transform: translateX(0); }

.animate-on-scroll.anim-slide-right { transform: translateX(24px); }
.animate-on-scroll.anim-slide-right.is-visible { transform: translateX(0); }

.animate-on-scroll.stagger-1 { transition-delay: 0.05s; }
.animate-on-scroll.stagger-2 { transition-delay: 0.1s; }
.animate-on-scroll.stagger-3 { transition-delay: 0.15s; }
.animate-on-scroll.stagger-4 { transition-delay: 0.2s; }
.animate-on-scroll.stagger-5 { transition-delay: 0.25s; }
.animate-on-scroll.stagger-6 { transition-delay: 0.3s; }

@media (prefers-reduced-motion: reduce) {
    .animate-on-scroll { opacity: 1; transform: none !important; transition: none !important; }
    .animate-on-scroll.is-visible { opacity: 1; transform: none !important; }
}
</style>
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
@endpush

@extends('layouts.app')

@section('content')
<div class="relative overflow-hidden page-de-garde-filigrane">
    {{-- Bande annonce fine et moderne --}}
    <div id="home-annonce-band" class="relative bg-[#0f0f0f] text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center justify-center gap-4 text-center flex-wrap">
            <span class="inline-flex items-center gap-2 text-sm font-medium tracking-wide">
                <span class="w-1.5 h-1.5 rounded-full bg-[#9B2363] shrink-0 animate-pulse" aria-hidden="true"></span>
                <span>{{ __('home.announcement_band') }}</span>
            </span>
            <a href="{{ route('senafet.inscription') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-widest text-[#9B2363] hover:text-white border border-[#9B2363] hover:bg-[#9B2363] px-3 py-1.5 rounded-full transition whitespace-nowrap">
                {{ __('home.announcement_band_cta') }}
            </a>
            <button type="button" id="annonce-band-close" class="absolute right-3 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full flex items-center justify-center text-white/70 hover:text-white hover:bg-white/10 transition" aria-label="{{ __('home.close') }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/5 to-transparent"></div>
        </div>
    </div>

{{-- Hero vidéo unique --}}
    <section class="hero-video-section relative" aria-label="Bandeau d'accueil">
        <div class="hero-video-wrapper">
            <video class="hero-video" autoplay muted loop playsinline preload="auto" aria-label="Vidéo de présentation SENAFET 2026">
                <source src="{{ asset('images/Final_1.webm') }}" type="video/webm" />
            </video>
        </div>
    </section>

    {{-- Mot du Chef de l'État --}}
    <section class="animate-on-scroll animate-section py-16 lg:py-20 bg-white section-filigrane-blanc">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-stretch">
                {{-- Carte profil président --}}
                <div class="animate-on-scroll animate-content anim-slide-left flex flex-col justify-center order-2 lg:order-1">
                    <div class="rounded-2xl overflow-hidden max-w-sm mx-auto lg:mx-0 w-full relative aspect-[3/4] max-h-[400px]">
                        <img src="{{ asset('images/president.png') }}" alt="{{ __('home.president_image_alt') }}" class="w-full h-full object-cover object-top" onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden')">
                        <span class="hidden text-[#9B2363]/50 text-sm text-center px-4 py-8">{{ __('home.president_image_alt') }}</span>
                        <div class="absolute bottom-0 left-0 right-0 bg-black/70 px-4 py-3">
                            <p class="text-white font-bold text-lg">{{ __('home.president_name') }}</p>
                            <p class="text-white/90 text-sm">{{ __('home.president_title') }}</p>
                        </div>
                    </div>
                </div>
                {{-- Citation avec guillemets rouges et lien --}}
                <div class="animate-on-scroll animate-content anim-slide-right flex flex-col justify-center order-1 lg:order-2">
                    <div class="relative">
                        <span class="text-[#9B2363] text-5xl sm:text-6xl font-serif leading-none select-none" aria-hidden="true">"</span>
                        <p class="text-[#000] text-lg leading-relaxed mt-2 rounded-xl px-4 py-3" style="background-color: #9B2363; color: #fff;">
                            {{ __('home.president_message') }}
                        </p>
                        <p class="text-[#333] text-sm mt-4 font-medium">
                            — {{ __('home.president_message_author') }}
                        </p>
                        <a href="{{ route('senafet.presentation') }}#message-president" class="inline-flex items-center gap-1 mt-6 text-[#9B2363] font-semibold hover:underline">
                            {{ __('home.president_read_more') }}
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Découvrez le programme --}}
    <section class="animate-on-scroll animate-section section-pattern-jif py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="animate-on-scroll animate-content anim-fade-in text-2xl font-bold text-white text-center mb-12">{{ __('home.sections_title') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <a href="{{ route('senafet.presentation') }}" class="animate-on-scroll animate-card stagger-1 block p-6 bg-white rounded-xl shadow-sm hover:shadow-md hover:border-[#9B2363]/30 border border-transparent transition">
                    <div class="w-12 h-12 rounded-lg bg-[#9B2363]/10 flex items-center justify-center text-[#9B2363] mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="font-semibold text-[#000]">{{ __('menu.presentation') }}</h3>
                    <p class="text-sm text-[#333] mt-1">{{ __('home.about_short') }}</p>
                </a>
                <a href="{{ route('infos.actualites') }}" class="animate-on-scroll animate-card stagger-2 block p-6 bg-white rounded-xl shadow-sm hover:shadow-md hover:border-[#9B2363]/30 border border-transparent transition">
                    <div class="w-12 h-12 rounded-lg bg-[#9B2363]/10 flex items-center justify-center text-[#9B2363] mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6m4-4v12m0 0l-4-4m4 4l4-4" /></svg>
                    </div>
                    <h3 class="font-semibold text-[#000]">{{ __('menu.actualites') }}</h3>
                    <p class="text-sm text-[#333] mt-1">{{ __('home.news_short') }}</p>
                </a>
                <a href="{{ route('infos.programme') }}" class="animate-on-scroll animate-card stagger-3 block p-6 bg-white rounded-xl shadow-sm hover:shadow-md hover:border-[#9B2363]/30 border border-transparent transition">
                    <div class="w-12 h-12 rounded-lg bg-[#9B2363]/10 flex items-center justify-center text-[#9B2363] mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </div>
                    <h3 class="font-semibold text-[#000]">{{ __('menu.programme') }}</h3>
                    <p class="text-sm text-[#333] mt-1">{{ __('home.programme_short') }}</p>
                </a>
                <a href="{{ route('partenaires.index') }}" class="animate-on-scroll animate-card stagger-4 block p-6 bg-white rounded-xl shadow-sm hover:shadow-md hover:border-[#9B2363]/30 border border-transparent transition">
                    <div class="w-12 h-12 rounded-lg bg-[#9B2363]/10 flex items-center justify-center text-[#9B2363] mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    </div>
                    <h3 class="font-semibold text-[#000]">{{ __('menu.partners') }}</h3>
                    <p class="text-sm text-[#333] mt-1">{{ __('home.partners_short') }}</p>
                </a>
                <a href="{{ route('senafet.accreditation-media') }}" class="animate-on-scroll animate-card stagger-5 block p-6 bg-white rounded-xl shadow-sm hover:shadow-md hover:border-[#9B2363]/30 border border-transparent transition">
                    <div class="w-12 h-12 rounded-lg bg-[#9B2363]/10 flex items-center justify-center text-[#9B2363] mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                    </div>
                    <h3 class="font-semibold text-[#000]">{{ __('menu.accreditation_media') }}</h3>
                    <p class="text-sm text-[#333] mt-1">{{ __('home.accreditation_media_short') }}</p>
                </a>
            </div>
        </div>
    </section>

    {{-- La SENAFET/JIF édition 2026 en chiffres --}}
    <section class="animate-on-scroll animate-section py-16 lg:py-20 bg-[#E9EFF4] relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-full bg-[#9B2363] text-white flex items-center justify-center font-bold text-sm shrink-0">
                        <span class="text-center leading-tight">2026<br>SENAFET/JIF</span>
                    </div>
                    <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-[#9B2363] uppercase tracking-wide">
                        {{ __('home.senafet_en_chiffres_title') }}
                    </h2>
                </div>
                <span class="text-5xl sm:text-6xl font-bold text-[#9B2363]/30 shrink-0" aria-hidden="true">02</span>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 items-stretch">
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-gray-700 text-white">
                                <th class="py-3 px-4 sm:px-6 font-semibold uppercase tracking-wider text-sm">{{ __('home.senafet_en_chiffres_indicateurs') }}</th>
                                <th class="py-3 px-4 sm:px-6 font-semibold uppercase tracking-wider text-sm">{{ __('home.senafet_en_chiffres_chiffres') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-gray-50 border-b border-gray-100">
                                <td class="py-3 px-4 sm:px-6 font-medium text-[#333]">{{ __('home.senafet_chiffre_1_label') }}</td>
                                <td class="py-3 px-4 sm:px-6 text-[#333]">{{ __('home.senafet_chiffre_1_value') }}</td>
                            </tr>
                            <tr class="bg-white border-b border-gray-100">
                                <td class="py-3 px-4 sm:px-6 font-medium text-[#333]">{{ __('home.senafet_chiffre_2_label') }}</td>
                                <td class="py-3 px-4 sm:px-6 text-[#333]">{{ __('home.senafet_chiffre_2_value') }}</td>
                            </tr>
                            <tr class="bg-gray-50 border-b border-gray-100">
                                <td class="py-3 px-4 sm:px-6 font-medium text-[#333]">{{ __('home.senafet_chiffre_3_label') }}</td>
                                <td class="py-3 px-4 sm:px-6 text-[#333]">{{ __('home.senafet_chiffre_3_value') }}</td>
                            </tr>
                            <tr class="bg-white border-b border-gray-100">
                                <td class="py-3 px-4 sm:px-6 font-medium text-[#333]">{{ __('home.senafet_chiffre_4_label') }}</td>
                                <td class="py-3 px-4 sm:px-6 text-[#333]">{{ __('home.senafet_chiffre_4_value') }}</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="py-3 px-4 sm:px-6 font-medium text-[#333]">{{ __('home.senafet_chiffre_5_label') }}</td>
                                <td class="py-3 px-4 sm:px-6 text-[#333]">{{ __('home.senafet_chiffre_5_value') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="rounded-xl overflow-hidden shadow-md border border-gray-100 bg-white flex items-center justify-center min-h-[280px] lg:min-h-0">
                    <img src="{{ asset('images/femme1.jpeg') }}" alt="{{ __('home.senafet_en_chiffres_title') }}" class="w-full h-full object-cover object-center" onerror="this.style.display='none'">
                </div>
            </div>
        </div>
    </section>

    {{-- Section vidéo plein écran (contenu géré en admin : Section vidéo accueil) --}}
    @php
        $hasFullVideo = $homeVideoSection?->video_path || file_exists(public_path('images/medium.mp4'));
        $videoSrc = $homeVideoSection?->video_path ? asset('storage/'.$homeVideoSection->video_path) : asset('images/medium.mp4');
        $posterSrc = $homeVideoSection?->poster_path ? asset('storage/'.$homeVideoSection->poster_path) : (file_exists(public_path('images/video-poster.jpg')) ? asset('images/video-poster.jpg') : null);
    @endphp
    <section class="animate-on-scroll animate-section relative bg-black py-0 lg:py-0 min-h-[560px] flex items-center justify-center overflow-hidden" id="home-video-full">
        @if ($hasFullVideo)
        <video
            class="w-full h-full object-cover object-center absolute inset-0 pointer-events-none z-0"
            autoplay
            muted
            loop
            playsinline
            preload="auto"
            @if ($posterSrc) poster="{{ $posterSrc }}" @endif
            style="min-height:560px;"
            aria-label="{{ __('home.video_section_title') }}">
            <source src="{{ $videoSrc }}" type="video/mp4">
        </video>
        @endif
        <div class="relative z-10 w-full h-full flex flex-col items-center justify-center text-center px-6 py-24 md:py-40 bg-black/40">
            <h2 class="animate-on-scroll animate-content anim-fade-in text-3xl md:text-5xl font-extrabold text-white mb-6 drop-shadow-lg">
                {{ $homeVideoSection?->title ?? __('home.video_section_title') }}
            </h2>
            <p class="animate-on-scroll animate-content anim-fade-in stagger-1 text-lg md:text-2xl text-white/90 mb-8 max-w-2xl mx-auto drop-shadow">
                {{ $homeVideoSection?->subtitle ?? __('home.video_section_subtitle') }}
            </p>
            <a href="{{ $homeVideoSection?->cta_url ? (str_starts_with($homeVideoSection->cta_url, 'http') ? $homeVideoSection->cta_url : url($homeVideoSection->cta_url)) : route('infos.programme') }}" class="animate-on-scroll animate-content anim-scale-in stagger-2 inline-block px-8 py-3 bg-[#9B2363] text-white font-semibold rounded-full text-base uppercase shadow hover:bg-[#7C1C4F] transition">
                {{ $homeVideoSection?->cta_text ?? __('home.video_section_cta') }}
            </a>
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/30 to-transparent z-5 pointer-events-none"></div>
    </section>

    {{-- Section vidéo de lancement de l'événement (contenu géré en admin) --}}
    @php
        $hasLaunchVideo = $homeVideoSection?->video_path || file_exists(public_path('images/video_institution.mp4'));
        $launchVideoSrc = $homeVideoSection?->video_path ? asset('storage/'.$homeVideoSection->video_path) : asset('images/video_institution.mp4');
        $launchPosterSrc = $homeVideoSection?->poster_path ? asset('storage/'.$homeVideoSection->poster_path) : (file_exists(public_path('images/video-launch-poster.jpg')) ? asset('images/video-launch-poster.jpg') : null);
    @endphp
    <section class="relative z-20 py-12 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="w-full flex justify-center">
                    <div class="relative w-full aspect-video max-w-2xl rounded-lg overflow-hidden shadow-lg {{ !$hasLaunchVideo ? 'bg-[#9B2363]/10 flex items-center justify-center' : '' }}">
                        @if ($hasLaunchVideo)
                        <video 
                            class="w-full h-full object-cover object-center"
                            src="{{ $launchVideoSrc }}"
                            controls
                            autoplay 
                            muted 
                            loop 
                            playsinline 
                            preload="metadata"
                            @if ($launchPosterSrc) poster="{{ $launchPosterSrc }}" @endif
                        >
                            {{ __('home.video_not_supported') }}
                        </video>
                        @else
                        <p class="text-[#9B2363] text-sm font-medium px-4 text-center">{{ __('home.video_not_supported') }}</p>
                        @endif
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-[#9B2363] mb-4">
                        {{ $homeVideoSection?->title ?? __('home.launch_section_title') }}
                    </h3>
                    <p class="text-[#333] text-lg leading-relaxed mb-4">
                        {{ $homeVideoSection?->subtitle ?? __('home.launch_section_description') }}
                    </p>
                    @if ($homeVideoSection?->cta_url || $homeVideoSection?->cta_text)
                        <a href="{{ $homeVideoSection?->cta_url ? (str_starts_with($homeVideoSection->cta_url, 'http') ? $homeVideoSection->cta_url : url($homeVideoSection->cta_url)) : '#' }}" class="inline-block mt-6 px-8 py-3 bg-[#9B2363] text-white font-semibold rounded-full text-base uppercase shadow hover:bg-[#7C1C4F] transition">
                            {{ $homeVideoSection?->cta_text ?? __('home.launch_section_cta') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- Participation SENAFET --}}
    <section class="animate-on-scroll animate-section py-12 lg:py-16 bg-white section-filigrane-blanc">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 lg:mb-12">
                <h2 class="animate-on-scroll animate-content anim-fade-in bg-[#9B2363] text-white text-xl sm:text-2xl font-bold text-center uppercase tracking-wide py-4 px-6 rounded">
                    {{ __('home.participation_title') }}
                </h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
                {{-- Colonne gauche : liens de téléchargement --}}
                <div class="animate-on-scroll animate-content anim-slide-left flex flex-col gap-3">
                    <a href="#" class="flex items-center gap-4 w-full py-3 px-4 bg-[#9B2363] text-white font-medium rounded-lg hover:bg-[#7C1C4F] transition shadow-sm">
                        <svg class="w-6 h-6 shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        {{ __('home.participation_dossier') }}
                    </a>
                    <a href="#" class="flex items-center gap-4 w-full py-3 px-4 bg-[#9B2363] text-white font-medium rounded-lg hover:bg-[#7C1C4F] transition shadow-sm">
                        <svg class="w-6 h-6 shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        {{ __('home.participation_fiche_exposant') }}
                    </a>
                    <a href="#" class="flex items-center gap-4 w-full py-3 px-4 bg-[#9B2363] text-white font-medium rounded-lg hover:bg-[#7C1C4F] transition shadow-sm">
                        <svg class="w-6 h-6 shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        {{ __('home.participation_fiche_sponsor') }}
                    </a>
                    {{-- <a href="#" class="flex items-center gap-4 w-full py-3 px-4 bg-[#9B2363] text-white font-medium rounded-lg hover:bg-[#7C1C4F] transition shadow-sm">
                        <svg class="w-6 h-6 shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        {{ __('home.participation_fiche_delegue') }}
                    </a> --}}
                    <a href="#" class="flex items-center gap-4 w-full py-3 px-4 bg-[#9B2363] text-white font-medium rounded-lg hover:bg-[#7C1C4F] transition shadow-sm">
                        <svg class="w-6 h-6 shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        {{ __('home.accreditation_media_short') }}
                    </a>
                </div>
                {{-- Colonne droite : cartes CTA --}}
                <div class="grid grid-cols-3 gap-4">
                    <a href="#" class="animate-on-scroll animate-card stagger-1 group block relative overflow-hidden rounded-xl aspect-[3/4] min-h-[200px] sm:min-h-[240px] shadow-md hover:shadow-lg transition bg-[#9B2363]">
                        <img src="{{ asset('images/participation/delegue.jpg') }}" alt="{{ __('home.participation_devenir_delegue') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.style.display='none';">
                        <div class="absolute inset-0 bg-[#9B2363]/80 flex flex-col justify-end p-4">
                            <span class="text-white/90 text-xs font-semibold uppercase tracking-wider">{{ __('home.participation_fiche_delegue_label') }}</span>
                            <span class="text-white text-lg font-bold uppercase mt-1">{{ __('home.participation_devenir_delegue') }}</span>
                        </div>
                    </a>
                    <a href="#" class="animate-on-scroll animate-card stagger-2 group block relative overflow-hidden rounded-xl aspect-[3/4] min-h-[200px] sm:min-h-[240px] shadow-md hover:shadow-lg transition bg-[#9B2363]">
                        <img src="{{ asset('images/participation/exposant.jpg') }}" alt="{{ __('home.participation_devenir_exposant') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.style.display='none';">
                        <div class="absolute inset-0 bg-[#9B2363]/80 flex flex-col justify-end p-4">
                            <span class="text-white/90 text-xs font-semibold uppercase tracking-wider">{{ __('home.participation_fiche_exposant_label') }}</span>
                            <span class="text-white text-lg font-bold uppercase mt-1">{{ __('home.participation_devenir_exposant') }}</span>
                        </div>
                    </a>
                    <a href="#" class="animate-on-scroll animate-card stagger-3 group block relative overflow-hidden rounded-xl aspect-[3/4] min-h-[200px] sm:min-h-[240px] shadow-md hover:shadow-lg transition bg-[#9B2363]">
                        <img src="{{ asset('images/participation/sponsor.jpg') }}" alt="{{ __('home.participation_devenir_sponsor') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.style.display='none';">
                        <div class="absolute inset-0 bg-[#9B2363]/80 flex flex-col justify-end p-4">
                            <span class="text-white/90 text-xs font-semibold uppercase tracking-wider">{{ __('home.participation_fiche_sponsoring_label') }}</span>
                            <span class="text-white text-lg font-bold uppercase mt-1">{{ __('home.participation_devenir_sponsor') }}</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- Panelistes SENAFET --}}
    <section class="animate-on-scroll animate-section py-12 lg:py-16 bg-white section-filigrane-blanc border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 lg:mb-12">
                <h2 class="animate-on-scroll animate-content anim-fade-in bg-[#9B2363] text-white text-xl sm:text-2xl font-bold text-center uppercase tracking-wide py-4 px-6 rounded">
                    {{ __('home.senafet_speakers_title') }}
                </h2>
            </div>
            <div class="grid grid-cols-3 gap-4 sm:gap-8 mb-10">
                @foreach($speakers as $speaker)
                <div class="animate-on-scroll animate-card stagger-{{ $loop->iteration }} flex flex-col items-center text-center">
                    <div class="w-40 h-40 sm:w-48 sm:h-48 rounded-lg overflow-hidden border-4 border-[#9B2363] shadow-lg mb-4 bg-[#9B2363]/10 flex items-center justify-center flex-shrink-0">
                        <img src="{{ $speaker['image'] }}" alt="{{ $speaker['name'] }}" class="w-full h-full object-cover" onerror="this.style.display='none';">
                    </div>
                    <h3 class="font-bold text-[#000] text-xs sm:text-base lg:text-lg">{{ $speaker['name'] }}</h3>
                    <p class="text-[10px] sm:text-xs lg:text-sm text-[#333] mt-1 line-clamp-2">{{ $speaker['title'] }}</p>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ route('senafet.panelistes') }}" class="animate-on-scroll animate-content anim-scale-in inline-flex px-8 py-3 bg-[#9B2363] text-white font-semibold uppercase tracking-wider rounded-lg hover:bg-[#7C1C4F] transition shadow-md">
                    {{ __('home.voir_plus') }}
                </a>
            </div>
        </div>
    </section>

    {{-- Actualités carousel --}}
    <section class="animate-on-scroll animate-section py-16 bg-white section-filigrane-blanc">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="animate-on-scroll animate-content anim-fade-in text-2xl font-bold text-[#000] text-center mb-2">{{ __('home.news_section_title') }}</h2>
            <p class="animate-on-scroll animate-content anim-fade-in stagger-1 text-[#333] text-center mb-10">{{ __('home.news_section_subtitle') }}</p>
            <div class="relative px-12 sm:px-14">
                <button type="button" id="carousel-prev" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-[#9B2363] text-white shadow-lg hover:bg-[#7C1C4F] transition flex items-center justify-center border-2 border-white focus:outline-none focus:ring-2 focus:ring-[#9B2363] focus:ring-offset-2" aria-label="{{ __('home.carousel_prev') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button type="button" id="carousel-next" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-[#9B2363] text-white shadow-lg hover:bg-[#7C1C4F] transition flex items-center justify-center border-2 border-white focus:outline-none focus:ring-2 focus:ring-[#9B2363] focus:ring-offset-2" aria-label="{{ __('home.carousel_next') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                </button>
                <div id="actualites-carousel" class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scroll-smooth hide-scrollbar scroll-pt-4" style="scrollbar-width: none; scroll-padding-inline: 0.5rem;">
                    @foreach($actualites as $item)
                        <article class="animate-on-scroll animate-card stagger-{{ $loop->iteration }} carousel-card flex-shrink-0 w-[280px] sm:w-[320px] snap-center bg-[#F5F5F5] rounded-xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer border border-gray-100" data-article-id="{{ $item['id'] }}">
                            <div class="aspect-[16/10] bg-[#9B2363]/10 overflow-hidden">
                                <img src="{{ $item['image'] }}" alt="" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <span class="text-xs text-[#9B2363] font-medium">{{ $item['date'] }}</span>
                                <h3 class="font-semibold text-[#000] mt-1 line-clamp-2">{{ $item['title'] }}</h3>
                                <p class="text-sm text-[#333] mt-2 line-clamp-2">{{ $item['excerpt'] }}</p>
                                <span class="inline-block mt-3 text-[#9B2363] font-medium text-sm">{{ __('home.read_article') }} →</span>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Thème 2026 : texte à gauche, image pleine largeur à droite --}}
    <section class="animate-on-scroll animate-section py-16 lg:py-24 bg-[#F5F5F5]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
                <div class="animate-on-scroll animate-content anim-slide-left order-2 lg:order-1 flex flex-col justify-center">
                    <h2 class="text-3xl font-bold text-[#000]">{{ __('home.theme_title') }}</h2>
                    <p class="text-[#9B2363] font-semibold text-lg mt-2">SENAFET / JIF 2026</p>
                    <p class="text-[#333] mt-6 text-lg leading-relaxed">
                        {{ __('home.theme_text') }}
                    </p>
                </div>
                <div class="animate-on-scroll animate-content anim-slide-right order-1 lg:order-2 w-full min-h-[320px] lg:min-h-[420px]">
                    <div class="w-full h-full min-h-[320px] lg:min-h-[420px] rounded-2xl overflow-hidden bg-white shadow-lg border border-gray-100">
                        <img src="{{ asset('images/femme2.jpeg') }}" alt="SENAFET / JIF 2026" class="w-full h-full min-h-[320px] lg:min-h-[420px] object-cover object-center">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Partage social --}}
    <section class="animate-on-scroll animate-section py-8 border-t border-gray-100 text-white" style="background: linear-gradient(90deg, #9B2363 0%, #e75480 100%);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="font-medium text-white drop-shadow-sm">#SENAFET / JIF 2026</p>
            <div class="flex gap-2">
                <span class="text-sm text-white/90">{{ __('home.share') }}</span>
                <a href="https://twitter.com/intent/tweet?text={{ urlencode(__('home.hero_title') . ' #SENAFET / JIF 2026') }}" target="_blank" rel="noopener"
                    class="p-2 rounded-full bg-white/20 hover:bg-white/30 hover:text-[#9B2363] text-white transition font-semibold shadow">
                    Twitter
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('home')) }}" target="_blank" rel="noopener"
                    class="p-2 rounded-full bg-white/20 hover:bg-white/30 hover:text-[#9B2363] text-white transition font-semibold shadow">
                    Facebook
                </a>
            </div>
        </div>
    </section>

    {{-- Section Partenaires (avant footer) : par secteur, conteneurs logo bordure dorée --}}
    @php
        $hasSectorsWithPartners = isset($partenairesBySector) && $partenairesBySector->contains(fn ($s) => $s->partenaires->isNotEmpty());
        $hasSansSector = isset($partenairesSansSector) && $partenairesSansSector->isNotEmpty();
    @endphp
    @if($hasSectorsWithPartners || $hasSansSector)
    <section id="section-partenaires" class="animate-on-scroll animate-section py-12 lg:py-16 bg-white section-filigrane-blanc border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="animate-on-scroll animate-content anim-fade-in partenaires-section-title text-xl sm:text-2xl font-bold text-center uppercase tracking-wide mb-2">
                {{ __('home.partners_section_title') }}
            </h2>
            <p class="text-[#333] text-center mb-2">
                {{ __('partenaires.by_sector_intro') }}
            </p>
            <p class="text-center mb-10">
                <a href="{{ route('partenaires.index') }}" class="text-[#9B2363] font-medium hover:underline">{{ __('home.cta_partner') }}</a>
            </p>

            @if($hasSectorsWithPartners)
            <div class="space-y-10 lg:space-y-12">
                @foreach($partenairesBySector as $sector)
                    @if($sector->partenaires->isNotEmpty())
                    <div>
                        <h3 class="partenaires-section-title text-lg sm:text-xl font-bold text-center uppercase tracking-wide mb-6">
                            {{ $sector->name }}
                        </h3>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 sm:gap-6">
                            @foreach($sector->partenaires as $p)
                            <a href="{{ route('partenaires.index') }}" class="animate-on-scroll animate-card partenaire-logo-box flex items-center justify-center aspect-square min-h-[100px] sm:min-h-[120px] bg-white rounded-xl border-2 border-amber-300/80 shadow-md hover:shadow-lg hover:border-amber-400 transition p-4">
                                @if($p->logo_path)
                                    <img src="{{ asset('storage/'.$p->logo_path) }}" alt="{{ $p->company }}" class="max-w-full max-h-full object-contain">
                                @else
                                    <span class="font-medium text-[#333] text-center text-sm">{{ $p->company }}</span>
                                @endif
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            @endif

            @if($hasSansSector)
            <div class="mt-10 lg:mt-12">
                <h3 class="partenaires-section-title text-lg sm:text-xl font-bold text-center uppercase tracking-wide mb-6">
                    {{ __('partenaires.official_partners') }}
                </h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 sm:gap-6">
                    @foreach($partenairesSansSector as $p)
                    <a href="{{ route('partenaires.index') }}" class="animate-on-scroll animate-card partenaire-logo-box flex items-center justify-center aspect-square min-h-[100px] sm:min-h-[120px] bg-white rounded-xl border-2 border-amber-300/80 shadow-md hover:shadow-lg hover:border-amber-400 transition p-4">
                        @if($p->logo_path)
                            <img src="{{ asset('storage/'.$p->logo_path) }}" alt="{{ $p->company }}" class="max-w-full max-h-full object-contain">
                        @else
                            <span class="font-medium text-[#333] text-center text-sm">{{ $p->company }}</span>
                        @endif
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

            <div class="mt-12 pt-8 border-t border-gray-200 text-center">
                <a href="{{ route('partenaires.index') }}" class="inline-flex px-6 py-3 bg-[#9B2363] text-white font-semibold rounded-lg hover:bg-[#7C1C4F] transition">
                    {{ __('home.cta_partner') }}
                </a>
            </div>
        </div>
    </section>
    @endif
</div>

{{-- Popup annonce SENAFET/JIF 2026 --}}
<div id="annonce-popup" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 bg-black/50" role="dialog" aria-modal="true" aria-label="SENAFET/JIF 2026 — Chaque femme compte">
    <div class="rounded-2xl shadow-2xl max-w-3xl w-full overflow-hidden relative bg-[#E9EFF4]">
        <button type="button" id="annonce-close" class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-white/95 hover:bg-[#D6297D] hover:text-white flex items-center justify-center transition shadow-md border border-[#D6297D]/20" aria-label="{{ __('home.close') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>
        <div class="relative flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/popup.jpg') }}" alt="SENAFET/JIF 2026 — Chaque femme compte" class="w-full h-auto max-h-[85vh] object-contain object-center" />
        </div>
        <div class="p-4 text-center border-t border-[#D6297D]/20">
            <a href="{{ route('senafet.inscription') }}" class="inline-block px-6 py-3 bg-[#D6297D] text-white font-semibold rounded-lg hover:bg-[#b8226a] transition">{{ __('home.cta_register') }}</a>
        </div>
    </div>
</div>

{{-- Modal article (lecture complète) --}}
<div id="article-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 bg-black/50" role="dialog" aria-modal="true" aria-labelledby="article-modal-title">
    <div class="bg-white rounded-2xl shadow-xl max-w-2xl w-full max-h-[90vh] overflow-hidden flex flex-col">
        <div class="p-6 border-b border-gray-100 flex-shrink-0 flex justify-between items-start gap-4">
            <h2 id="article-modal-title" class="text-xl font-bold text-[#000]"></h2>
            <button type="button" id="article-modal-close" class="w-8 h-8 rounded-full bg-[#F5F5F5] hover:bg-[#9B2363] hover:text-white flex items-center justify-center transition flex-shrink-0" aria-label="{{ __('home.close') }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>
        <div id="article-modal-body" class="p-6 overflow-y-auto text-[#333] leading-relaxed"></div>
    </div>
</div>

@push('scripts')
<script>
(function() {
    var heroVideo = document.querySelector('.hero-video-section .hero-video');
    if (heroVideo) {
        heroVideo.play().catch(function() {});
    }
})();
</script>
<style>
.hide-scrollbar::-webkit-scrollbar { display: none; }
.partenaires-section-title { color: #1e3a5f; }
</style>
<script>
(function() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    var els = document.querySelectorAll('.animate-on-scroll');
    if (!els.length) return;
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { rootMargin: '0px 0px -60px 0px', threshold: 0.1 });
    els.forEach(function(el) { observer.observe(el); });
})();
</script>
<script>
(function() {
    var ARTICLES = @json($actualites);

    // Bande annonce : masquer si fermée pendant la session
    var annonceBand = document.getElementById('home-annonce-band');
    var annonceBandClose = document.getElementById('annonce-band-close');
    if (annonceBand && sessionStorage.getItem('jenafet_band_closed')) {
        annonceBand.style.display = 'none';
    }
    if (annonceBandClose && annonceBand) {
        annonceBandClose.addEventListener('click', function() {
            sessionStorage.setItem('jenafet_band_closed', '1');
            annonceBand.style.display = 'none';
        });
    }

    // Popup annonce : afficher une seule fois par session
    var popup = document.getElementById('annonce-popup');
    var annonceClose = document.getElementById('annonce-close');
    if (popup && !sessionStorage.getItem('jenafet_annonce_seen')) {
        popup.classList.remove('hidden');
        popup.classList.add('flex');
    }
    if (annonceClose) {
        annonceClose.addEventListener('click', function() {
            sessionStorage.setItem('jenafet_annonce_seen', '1');
            popup.classList.add('hidden');
            popup.classList.remove('flex');
        });
    }
    popup && popup.addEventListener('click', function(e) {
        if (e.target === popup) {
            sessionStorage.setItem('jenafet_annonce_seen', '1');
            popup.classList.add('hidden');
            popup.classList.remove('flex');
        }
    });

    // Carousel actualités : défilement d'une carte avec les boutons Précédent / Suivant
    var carousel = document.getElementById('actualites-carousel');
    var prevBtn = document.getElementById('carousel-prev');
    var nextBtn = document.getElementById('carousel-next');
    if (carousel && (prevBtn || nextBtn)) {
        var cards = carousel.querySelectorAll('.carousel-card');
        var gap = 24;
        function getScrollAmount() {
            if (cards.length === 0) return 320 + gap;
            var card = cards[0];
            return card.getBoundingClientRect().width + gap;
        }
        function updateButtons() {
            var scrollLeft = carousel.scrollLeft;
            var maxScroll = carousel.scrollWidth - carousel.clientWidth;
            if (prevBtn) prevBtn.style.opacity = scrollLeft <= 2 ? '0.5' : '1';
            if (prevBtn) prevBtn.style.pointerEvents = scrollLeft <= 2 ? 'none' : 'auto';
            if (nextBtn) nextBtn.style.opacity = maxScroll <= 2 || scrollLeft >= maxScroll - 2 ? '0.5' : '1';
            if (nextBtn) nextBtn.style.pointerEvents = maxScroll <= 2 || scrollLeft >= maxScroll - 2 ? 'none' : 'auto';
        }
        if (prevBtn) prevBtn.addEventListener('click', function() { carousel.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' }); });
        if (nextBtn) nextBtn.addEventListener('click', function() { carousel.scrollBy({ left: getScrollAmount(), behavior: 'smooth' }); });
        carousel.addEventListener('scroll', updateButtons);
        updateButtons();
    }

    // Modal article : clic sur une card
    var modal = document.getElementById('article-modal');
    var modalTitle = document.getElementById('article-modal-title');
    var modalBody = document.getElementById('article-modal-body');
    var modalClose = document.getElementById('article-modal-close');

    document.querySelectorAll('.carousel-card').forEach(function(card) {
        card.addEventListener('click', function() {
            var id = parseInt(card.getAttribute('data-article-id'), 10);
            var article = ARTICLES.find(function(a) { return a.id === id; });
            if (!article) return;
            modalTitle.textContent = article.title;
            modalBody.textContent = article.full_content;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        });
    });

    function closeArticleModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }
    if (modalClose) modalClose.addEventListener('click', closeArticleModal);
    modal && modal.addEventListener('click', function(e) {
        if (e.target === modal) closeArticleModal();
    });
})();
</script>
@endpush
@endsection
