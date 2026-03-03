@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-0 pb-12 lg:pb-16">
    <x-page-header :title="__('menu.gallery')" :subtitle="__('galerie.intro')" />

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($media ?? [] as $item)
            <a href="{{ $item->url }}" target="_blank" rel="noopener" class="block rounded-xl overflow-hidden shadow-sm hover:shadow-md transition aspect-[4/3] bg-[#F5F5F5]">
                <img src="{{ $item->url }}" alt="{{ $item->title ?? '' }}" class="w-full h-full object-cover">
                <div class="p-3 bg-white"><p class="text-sm text-[#333]">{{ $item->title ?? '' }}</p></div>
            </a>
        @empty
            <div class="col-span-full bg-white rounded-xl shadow-sm p-12 text-center text-[#333]">
                <p>{{ __('galerie.empty') }}</p>
                <p class="text-sm mt-2">{{ __('galerie.coming_soon') }}</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
