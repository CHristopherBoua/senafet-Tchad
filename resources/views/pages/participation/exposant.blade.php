@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-0 pb-12 lg:pb-16">
    <x-page-header :title="__('menu.exposant')" subtitle="SENAFET 2026" />
    <div class="max-w-3xl mx-auto">
        <p class="text-[#333] leading-relaxed">{{ __('pages.coming_soon') }}</p>
    </div>
</div>
@endsection
