@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-0 pb-12 lg:pb-16">
    <x-page-header :title="__('menu.news')" :subtitle="__('news.intro')" />

    <div class="grid gap-8 max-w-4xl mx-auto">
        @forelse($news as $item)
            <article class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
                <div class="p-6">
                    <time class="text-sm text-[#C41E3A] font-medium">{{ $item->date ?? now()->format('d/m/Y') }}</time>
                    <h2 class="text-xl font-semibold text-[#000] mt-2">{{ $item->title }}</h2>
                    <p class="text-[#333] mt-2">{{ $item->excerpt }}</p>
                    <a href="#" class="inline-block mt-4 text-[#C41E3A] font-medium hover:underline">{{ __('news.read_more') }}</a>
                </div>
            </article>
        @empty
            <div class="bg-white rounded-xl shadow-sm p-8 text-center text-[#333]">
                <p>{{ __('news.empty') }}</p>
                <p class="text-sm mt-2">{{ __('news.coming_soon') }}</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
