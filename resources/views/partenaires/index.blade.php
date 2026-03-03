@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-0 pb-12 lg:pb-16">
    <x-page-header :title="__('partenaires.title')" :subtitle="__('partenaires.subtitle')" />

    {{-- Niveaux de partenariat --}}
    <section class="mb-16">
        <h2 class="text-xl font-semibold text-[#000] mb-6 text-center">{{ __('partenaires.levels_title') }}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-xl shadow-sm border-2 border-gray-200 p-6 text-center">
                <div class="w-12 h-12 mx-auto rounded-full bg-gray-300 flex items-center justify-center text-gray-600 font-bold text-sm">P</div>
                <h3 class="font-semibold text-[#000] mt-3">{{ __('partenaires.platine') }}</h3>
                <p class="text-sm text-[#333] mt-1">{{ __('partenaires.advantages') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border-2 border-amber-400 p-6 text-center">
                <div class="w-12 h-12 mx-auto rounded-full bg-amber-100 flex items-center justify-center text-amber-700 font-bold text-sm">O</div>
                <h3 class="font-semibold text-[#000] mt-3">{{ __('partenaires.or') }}</h3>
                <p class="text-sm text-[#333] mt-1">{{ __('partenaires.advantages') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border-2 border-gray-400 p-6 text-center">
                <div class="w-12 h-12 mx-auto rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-bold text-sm">A</div>
                <h3 class="font-semibold text-[#000] mt-3">{{ __('partenaires.argent') }}</h3>
                <p class="text-sm text-[#333] mt-1">{{ __('partenaires.advantages') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border-2 border-amber-700 p-6 text-center">
                <div class="w-12 h-12 mx-auto rounded-full bg-amber-200 flex items-center justify-center text-amber-800 font-bold text-sm">B</div>
                <h3 class="font-semibold text-[#000] mt-3">{{ __('partenaires.bronze') }}</h3>
                <p class="text-sm text-[#333] mt-1">{{ __('partenaires.advantages') }}</p>
            </div>
        </div>
        <p class="text-center mt-4">
            <a href="#" class="text-[#C41E3A] font-medium hover:underline">{{ __('partenaires.download_dossier') }}</a>
        </p>
    </section>

    {{-- Formulaire --}}
    <section class="max-w-2xl mx-auto">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 lg:p-8">
            <h2 class="text-xl font-semibold text-[#000] mb-6">{{ __('partenaires.form_title') }}</h2>

            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 text-green-800 rounded-lg">{{ session('success') }}</div>
            @endif

            <form action="{{ route('partenaires.store') }}" method="post" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label for="company" class="block text-sm font-medium text-[#333] mb-1">{{ __('partenaires.company') }} *</label>
                    <input type="text" name="company" id="company" required
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                           value="{{ old('company') }}">
                    @error('company')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="contact_name" class="block text-sm font-medium text-[#333] mb-1">{{ __('partenaires.contact_name') }} *</label>
                        <input type="text" name="contact_name" id="contact_name" required
                               class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                               value="{{ old('contact_name') }}">
                        @error('contact_name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-[#333] mb-1">{{ __('partenaires.email') }} *</label>
                        <input type="email" name="email" id="email" required
                               class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                               value="{{ old('email') }}">
                        @error('email')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-[#333] mb-1">{{ __('partenaires.phone') }}</label>
                    <input type="tel" name="phone" id="phone"
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                           value="{{ old('phone') }}">
                    @error('phone')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="level" class="block text-sm font-medium text-[#333] mb-1">{{ __('partenaires.level') }} *</label>
                    <select name="level" id="level" required
                            class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                        <option value="">{{ __('partenaires.level') }}</option>
                        <option value="platine" {{ old('level') === 'platine' ? 'selected' : '' }}>{{ __('partenaires.platine') }}</option>
                        <option value="or" {{ old('level') === 'or' ? 'selected' : '' }}>{{ __('partenaires.or') }}</option>
                        <option value="argent" {{ old('level') === 'argent' ? 'selected' : '' }}>{{ __('partenaires.argent') }}</option>
                        <option value="bronze" {{ old('level') === 'bronze' ? 'selected' : '' }}>{{ __('partenaires.bronze') }}</option>
                    </select>
                    @error('level')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                @if(isset($sectors) && $sectors->isNotEmpty())
                <div>
                    <label for="partenaire_sector_id" class="block text-sm font-medium text-[#333] mb-1">{{ __('partenaires.sector') }}</label>
                    <select name="partenaire_sector_id" id="partenaire_sector_id"
                            class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                        <option value="">{{ __('partenaires.sector') }}</option>
                        @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}" {{ old('partenaire_sector_id') == $sector->id ? 'selected' : '' }}>{{ $sector->name }}</option>
                        @endforeach
                    </select>
                    @error('partenaire_sector_id')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                @endif
                <div>
                    <label for="logo" class="block text-sm font-medium text-[#333] mb-1">{{ __('partenaires.logo') }}</label>
                    <input type="file" name="logo" id="logo" accept="image/*"
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30">
                    @error('logo')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-[#333] mb-1">{{ __('partenaires.message') }}</label>
                    <textarea name="message" id="message" rows="4"
                              class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">{{ old('message') }}</textarea>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-[#333] mb-1">{{ __('partenaires.password_optional') }}</label>
                    <input type="password" name="password" id="password" minlength="8"
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]" placeholder="Min. 8 caractères">
                    @error('password')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-[#333] mb-1">{{ __('partenaires.password_confirmation') }}</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" minlength="8"
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                </div>
                <div>
                    <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-[#C41E3A] text-white font-semibold rounded-lg hover:bg-[#a0192f] transition">
                        {{ __('partenaires.submit') }}
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- Partenaires par secteur / catégorie --}}
    @if(isset($partenairesBySector) && $partenairesBySector->isNotEmpty())
    @php
        $hasAnyPartner = $partenairesBySector->contains(fn ($s) => $s->partenaires->isNotEmpty());
    @endphp
    @if($hasAnyPartner)
    <section class="mt-16">
        <h2 class="text-2xl font-bold text-[#000] text-center mb-2">{{ __('partenaires.by_sector_title') }}</h2>
        <p class="text-[#333] text-center mb-10 max-w-2xl mx-auto">{{ __('partenaires.by_sector_intro') }}</p>
        <div class="space-y-12">
            @foreach($partenairesBySector as $sector)
                @if($sector->partenaires->isNotEmpty())
                <div>
                    <h3 class="text-lg font-semibold text-[#C41E3A] mb-4 pb-2 border-b border-gray-200">{{ $sector->name }}</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                        @foreach($sector->partenaires as $p)
                        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-4 flex items-center justify-center min-h-[120px]">
                            @if($p->logo_path)
                                <img src="{{ asset('storage/'.$p->logo_path) }}" alt="{{ $p->company }}" class="max-w-full max-h-20 object-contain">
                            @else
                                <span class="font-medium text-[#333] text-center">{{ $p->company }}</span>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </section>
    @endif
    @endif

    {{-- Partenaires officiels (défilant) --}}
    @if(!empty($partenaires))
    <section class="mt-16 overflow-hidden">
        <h2 class="text-xl font-semibold text-[#000] mb-6 text-center">{{ __('partenaires.official_partners') }}</h2>
        <div class="partenaires-marquee-wrapper relative">
            <div class="partenaires-marquee flex gap-10 items-center py-4" aria-hidden="true">
                @foreach(array_merge($partenaires, $partenaires) as $p)
                <div class="partenaire-slide flex-shrink-0 w-36 h-24 flex items-center justify-center bg-white rounded-xl border border-gray-100 shadow-sm">
                    <img src="{{ asset($p['logo']) }}" alt="{{ $p['name'] }}" class="max-w-full max-h-full object-contain p-2">
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>

@push('scripts')
<style>
.partenaires-marquee-wrapper { mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent); }
.partenaires-marquee { animation: partenaires-scroll 40s linear infinite; }
@keyframes partenaires-scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
[dir="rtl"] .partenaires-marquee { animation: partenaires-scroll-rtl 40s linear infinite; }
@keyframes partenaires-scroll-rtl { 0% { transform: translateX(-50%); } 100% { transform: translateX(0); } }
</style>
@endpush
@endsection
