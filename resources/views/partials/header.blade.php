<header class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 lg:h-20">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo-ministere-femme-enfance.png') }}" alt="Ministère de la Femme, et de la Petite Enfance" class="h-12 w-auto object-contain" />
                <img src="{{ asset('images/logo.png') }}" alt="SENAFET 2026" class="h-12 w-auto object-contain" />
                {{-- <div>
                    <span class="font-semibold text-[#000] text-lg">SENAFET</span>
                    <span class="text-[#9B2363] font-bold"> 2026</span>
                </div> --}}
            </a>

            <nav class="hidden lg:flex items-center gap-1" aria-label="Navigation principale">
                <x-nav-link href="{{ route('home') }}">{{ __('menu.home') }}</x-nav-link>

                {{-- SENAFET --}}
                <div class="relative nav-dropdown">
                    <button type="button" class="nav-dropdown-trigger px-4 py-2 text-[#333] hover:text-[#9B2363] font-medium rounded-lg hover:bg-[#F5F5F5] transition flex items-center gap-1" aria-expanded="false" aria-haspopup="true">
                        {{ __('menu.senafet') }}
                        <svg class="w-4 h-4 transition-transform nav-dropdown-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div class="nav-dropdown-panel absolute top-full left-0 pt-1 z-50" hidden>
                        <div class="w-56 bg-white rounded-lg shadow-lg border border-gray-100 py-2">
                        <a href="{{ route('senafet.presentation') }}" class="block px-4 py-2 text-[#333] hover:bg-[#F5F5F5] hover:text-[#9B2363]">{{ __('menu.presentation') }}</a>
                        <a href="{{ route('senafet.inscription') }}" class="block px-4 py-2 text-[#333] hover:bg-[#F5F5F5] hover:text-[#9B2363]">{{ __('menu.inscription') }}</a>
                        <a href="{{ route('senafet.accreditation-media') }}" class="block px-4 py-2 text-[#333] hover:bg-[#F5F5F5] hover:text-[#9B2363]">{{ __('menu.accreditation_media') }}</a>
                        <a href="{{ route('senafet.panelistes') }}" class="block px-4 py-2 text-[#333] hover:bg-[#F5F5F5] hover:text-[#9B2363]">{{ __('menu.panelistes') }}</a>
                        </div>
                    </div>
                </div>

                <x-nav-link href="{{ route('galerie') }}">{{ __('menu.gallery') }}</x-nav-link>

                {{-- Participation --}}
                <div class="relative nav-dropdown">
                    <button type="button" class="nav-dropdown-trigger px-4 py-2 text-[#333] hover:text-[#9B2363] font-medium rounded-lg hover:bg-[#F5F5F5] transition flex items-center gap-1" aria-expanded="false" aria-haspopup="true">
                        {{ __('menu.participation') }}
                        <svg class="w-4 h-4 transition-transform nav-dropdown-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div class="nav-dropdown-panel absolute top-full left-0 pt-1 z-50" hidden>
                        <div class="w-52 bg-white rounded-lg shadow-lg border border-gray-100 py-2">
                        <a href="{{ route('participation.exposant') }}" class="block px-4 py-2 text-[#333] hover:bg-[#F5F5F5] hover:text-[#9B2363]">{{ __('menu.exposant') }}</a>
                        <a href="{{ route('participation.sponsor') }}" class="block px-4 py-2 text-[#333] hover:bg-[#F5F5F5] hover:text-[#9B2363]">{{ __('menu.sponsor') }}</a>
                        </div>
                    </div>
                </div>

                {{-- Infos pratiques --}}
                <div class="relative nav-dropdown">
                    <button type="button" class="nav-dropdown-trigger px-4 py-2 text-[#333] hover:text-[#9B2363] font-medium rounded-lg hover:bg-[#F5F5F5] transition flex items-center gap-1" aria-expanded="false" aria-haspopup="true">
                        {{ __('menu.infos') }}
                        <svg class="w-4 h-4 transition-transform nav-dropdown-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div class="nav-dropdown-panel absolute top-full left-0 pt-1 z-50" hidden>
                        <div class="w-56 bg-white rounded-lg shadow-lg border border-gray-100 py-2">
                        <a href="{{ route('infos.tarifs') }}" class="block px-4 py-2 text-[#333] hover:bg-[#F5F5F5] hover:text-[#9B2363]">{{ __('menu.tarifs') }}</a>
                        <a href="{{ route('infos.actualites') }}" class="block px-4 py-2 text-[#333] hover:bg-[#F5F5F5] hover:text-[#9B2363]">{{ __('menu.actualites') }}</a>
                        <a href="{{ route('infos.programme') }}" class="block px-4 py-2 text-[#333] hover:bg-[#F5F5F5] hover:text-[#9B2363]">{{ __('menu.programme') }}</a>
                        </div>
                    </div>
                </div>

                <x-nav-link href="{{ route('contact') }}">{{ __('menu.contact') }}</x-nav-link>
                <a href="{{ route('partenaire.login') }}" class="ml-2 px-4 py-2 bg-[#9B2363] text-white font-medium rounded-lg hover:bg-[#7C1C4F] transition">
                    {{ __('menu.platform') }}
                </a>
            </nav>

            <div class="flex items-center gap-3">
                @include('partials.lang-switcher')
                <button type="button" id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg text-[#333] hover:bg-[#F5F5F5]" aria-label="Menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-100">
        <div class="px-4 py-4 space-y-1 max-h-[80vh] overflow-y-auto">
            <a href="{{ route('home') }}" class="block py-2 text-[#333] hover:text-[#9B2363]">{{ __('menu.home') }}</a>
            <span class="block py-2 text-[#9B2363] font-semibold text-sm">{{ __('menu.senafet') }}</span>
            <a href="{{ route('senafet.presentation') }}" class="block py-2 pl-4 text-[#333] hover:text-[#9B2363]">{{ __('menu.presentation') }}</a>
            <a href="{{ route('senafet.inscription') }}" class="block py-2 pl-4 text-[#333] hover:text-[#9B2363]">{{ __('menu.inscription') }}</a>
            <a href="{{ route('senafet.accreditation-media') }}" class="block py-2 pl-4 text-[#333] hover:text-[#9B2363]">{{ __('menu.accreditation_media') }}</a>
            <a href="{{ route('senafet.panelistes') }}" class="block py-2 pl-4 text-[#333] hover:text-[#9B2363]">{{ __('menu.panelistes') }}</a>
            <a href="{{ route('galerie') }}" class="block py-2 text-[#333] hover:text-[#9B2363]">{{ __('menu.gallery') }}</a>
            <span class="block py-2 text-[#9B2363] font-semibold text-sm">{{ __('menu.participation') }}</span>
            <a href="{{ route('participation.exposant') }}" class="block py-2 pl-4 text-[#333] hover:text-[#9B2363]">{{ __('menu.exposant') }}</a>
            <a href="{{ route('participation.sponsor') }}" class="block py-2 pl-4 text-[#333] hover:text-[#9B2363]">{{ __('menu.sponsor') }}</a>
            <span class="block py-2 text-[#9B2363] font-semibold text-sm">{{ __('menu.infos') }}</span>
            <a href="{{ route('infos.tarifs') }}" class="block py-2 pl-4 text-[#333] hover:text-[#9B2363]">{{ __('menu.tarifs') }}</a>
            <a href="{{ route('infos.actualites') }}" class="block py-2 pl-4 text-[#333] hover:text-[#9B2363]">{{ __('menu.actualites') }}</a>
            <a href="{{ route('infos.programme') }}" class="block py-2 pl-4 text-[#333] hover:text-[#9B2363]">{{ __('menu.programme') }}</a>
            <a href="{{ route('contact') }}" class="block py-2 text-[#333] hover:text-[#9B2363]">{{ __('menu.contact') }}</a>
            <a href="{{ route('partenaire.login') }}" class="block mt-3 py-3 px-4 bg-[#9B2363] text-white font-medium rounded-lg text-center">{{ __('menu.platform') }}</a>
        </div>
    </div>
</header>

<style>
.nav-dropdown-panel[hidden] { display: none; }
.nav-dropdown.is-open .nav-dropdown-chevron { transform: rotate(180deg); }
</style>
<script>
(function() {
    // Menu mobile
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Menus déroulants desktop
    var dropdowns = document.querySelectorAll('.nav-dropdown');
    var triggers = document.querySelectorAll('.nav-dropdown-trigger');

    function closeAllDropdowns() {
        dropdowns.forEach(function(d) {
            d.classList.remove('is-open');
            var panel = d.querySelector('.nav-dropdown-panel');
            var btn = d.querySelector('.nav-dropdown-trigger');
            if (panel) panel.setAttribute('hidden', '');
            if (btn) btn.setAttribute('aria-expanded', 'false');
        });
    }

    function openDropdown(dropdown) {
        closeAllDropdowns();
        dropdown.classList.add('is-open');
        var panel = dropdown.querySelector('.nav-dropdown-panel');
        var btn = dropdown.querySelector('.nav-dropdown-trigger');
        if (panel) panel.removeAttribute('hidden');
        if (btn) btn.setAttribute('aria-expanded', 'true');
    }

    function toggleDropdown(dropdown) {
        if (dropdown.classList.contains('is-open')) {
            closeAllDropdowns();
        } else {
            openDropdown(dropdown);
        }
    }

    triggers.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var dropdown = btn.closest('.nav-dropdown');
            if (dropdown) toggleDropdown(dropdown);
        });
    });

    document.addEventListener('click', function() {
        closeAllDropdowns();
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeAllDropdowns();
    });
})();
</script>
