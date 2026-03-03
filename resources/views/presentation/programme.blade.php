@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-0 pb-12 lg:pb-16">
    <x-page-header :title="__('menu.programme')" :subtitle="__('programme.intro')">
        <x-slot:actions>
            <a href="#" class="inline-flex items-center bg-white text-[#C41E3A] font-bold py-3 px-6 rounded-full hover:bg-gray-100 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                {{ __('programme.download_pdf') }}
            </a>
        </x-slot:actions>
    </x-page-header>

    <div class="max-w-4xl mx-auto space-y-6">
        @forelse($events as $event)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex flex-col sm:flex-row gap-4">
                <div class="sm:w-24 shrink-0 text-center sm:text-left">
                    <span class="text-2xl font-bold text-[#C41E3A]">{{ $event->day ?? '08' }}</span>
                    <span class="block text-sm text-[#333]">{{ $event->month ?? 'Mars' }}</span>
                </div>
                <div class="flex-1">
                    <h2 class="text-lg font-semibold text-[#000]">{{ $event->title ?? 'Cérémonie officielle' }}</h2>
                    <p class="text-[#333] text-sm mt-1">{{ $event->place ?? 'N\'Djaména' }} · {{ $event->time ?? '09h00' }}</p>
                    <p class="text-[#333] mt-2">{{ $event->description ?? __('programme.event_desc') }}</p>
                </div>
            </div>
        @empty
            <div class="bg-white rounded-xl shadow-sm p-8 text-center text-[#333]">
                <p>{{ __('programme.empty') }}</p>
                <p class="text-sm mt-2">{{ __('programme.coming_soon') }}</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
