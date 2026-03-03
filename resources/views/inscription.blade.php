@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-0 pb-12 lg:pb-16">
    <x-page-header :title="__('menu.register')" :subtitle="__('inscription.intro')" />

    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 lg:p-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 text-green-800 rounded-lg">{{ session('success') }}</div>
            @endif

            <form action="{{ route('senafet.inscription.store') }}" method="post" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-[#333] mb-1">{{ __('inscription.first_name') }} *</label>
                        <input type="text" name="first_name" id="first_name" required
                               class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                               value="{{ old('first_name') }}">
                        @error('first_name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-[#333] mb-1">{{ __('inscription.last_name') }} *</label>
                        <input type="text" name="last_name" id="last_name" required
                               class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                               value="{{ old('last_name') }}">
                        @error('last_name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-[#333] mb-1">{{ __('inscription.email') }} *</label>
                    <input type="email" name="email" id="email" required
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                           value="{{ old('email') }}">
                    @error('email')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-[#333] mb-1">{{ __('inscription.phone') }}</label>
                    <input type="tel" name="phone" id="phone"
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                           value="{{ old('phone') }}">
                </div>
                <div>
                    <label for="activities" class="block text-sm font-medium text-[#333] mb-1">{{ __('inscription.activities') }}</label>
                    <select name="activities[]" id="activities" multiple
                            class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                        <option value="ceremony">{{ __('inscription.ceremony') }}</option>
                        <option value="conferences">{{ __('inscription.conferences') }}</option>
                        <option value="workshops">{{ __('inscription.workshops') }}</option>
                    </select>
                    <p class="text-xs text-[#333] mt-1">{{ __('inscription.activities_help') }}</p>
                </div>
                <div>
                    <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-[#C41E3A] text-white font-semibold rounded-lg hover:bg-[#a0192f] transition">
                        {{ __('inscription.submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
