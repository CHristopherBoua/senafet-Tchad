@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 lg:p-8">
        <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
            <h1 class="text-2xl font-bold text-[#000]">{{ __('partenaire.dashboard_title') }}</h1>
            <form action="{{ route('partenaire.logout') }}" method="post">
                @csrf
                <button type="submit" class="px-4 py-2 text-sm text-[#C41E3A] hover:underline">{{ __('partenaire.logout') }}</button>
            </form>
        </div>

        <div class="space-y-6">
            <div class="p-4 rounded-xl {{ $partenaire->is_published ? 'bg-green-50 text-green-800' : 'bg-amber-50 text-amber-800' }}">
                <p class="font-medium">{{ __('partenaire.status') }}</p>
                <p class="mt-1">
                    @if($partenaire->is_published)
                        {{ __('partenaire.status_published') }}
                    @else
                        {{ __('partenaire.status_pending') }}
                    @endif
                </p>
            </div>

            <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <dt class="text-sm font-medium text-gray-500">{{ __('partenaires.company') }}</dt>
                    <dd class="mt-1 text-[#333]">{{ $partenaire->company }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">{{ __('partenaires.contact_name') }}</dt>
                    <dd class="mt-1 text-[#333]">{{ $partenaire->contact_name }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">{{ __('partenaires.level') }}</dt>
                    <dd class="mt-1 text-[#333]">{{ __("partenaires.{$partenaire->level}") }}</dd>
                </div>
                @if($partenaire->sector)
                <div>
                    <dt class="text-sm font-medium text-gray-500">{{ __('partenaires.sector') }}</dt>
                    <dd class="mt-1 text-[#333]">{{ $partenaire->sector->name }}</dd>
                </div>
                @endif
            </dl>

            @if($partenaire->logo_path)
            <div>
                <p class="text-sm font-medium text-gray-500 mb-2">{{ __('partenaires.logo') }}</p>
                <img src="{{ asset('storage/'.$partenaire->logo_path) }}" alt="{{ $partenaire->company }}" class="max-h-24 object-contain rounded-lg border border-gray-100">
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
