@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-0 pb-12 lg:pb-16">
    <x-page-header :title="__('menu.contact')" :subtitle="__('contact.intro')" />

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-5xl mx-auto">
        <div>
            <h2 class="text-xl font-semibold text-[#000] mb-4">{{ __('contact.ministry') }}</h2>
            <p class="text-[#333]">{{ __('contact.address') }}</p>
            <p class="text-[#333] mt-2">{{ __('contact.phone') }}</p>
            <p class="text-[#333]">{{ __('contact.contact_email') }}</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 lg:p-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 text-green-800 rounded-lg">{{ session('success') }}</div>
            @endif

            <form action="{{ route('contact.store') }}" method="post" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-[#333] mb-1">{{ __('contact.name') }} *</label>
                    <input type="text" name="name" id="name" required
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                           value="{{ old('name') }}">
                    @error('name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-[#333] mb-1">{{ __('contact.email') }} *</label>
                    <input type="email" name="email" id="email" required
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                           value="{{ old('email') }}">
                    @error('email')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium text-[#333] mb-1">{{ __('contact.subject') }} *</label>
                    <input type="text" name="subject" id="subject" required
                           class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]"
                           value="{{ old('subject') }}">
                    @error('subject')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-[#333] mb-1">{{ __('contact.message') }} *</label>
                    <textarea name="message" id="message" rows="4" required
                              class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">{{ old('message') }}</textarea>
                    @error('message')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-[#C41E3A] text-white font-semibold rounded-lg hover:bg-[#a0192f] transition">
                        {{ __('contact.send') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
