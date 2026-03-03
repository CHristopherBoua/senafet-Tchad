@extends('admin.layout')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <a href="{{ route('admin.partenaires.index') }}" class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
        <p class="text-sm font-medium text-gray-500">{{ __('admin.partners') }}</p>
        <p class="text-3xl font-bold text-[#C41E3A] mt-1">{{ $partenairesCount }}</p>
        <p class="text-xs text-gray-400 mt-2">{{ $partenairesPublishedCount }} publiés</p>
    </a>
    <a href="{{ route('admin.sectors.index') }}" class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
        <p class="text-sm font-medium text-gray-500">{{ __('admin.sectors') }}</p>
        <p class="text-3xl font-bold text-[#C41E3A] mt-1">{{ $sectorsCount }}</p>
    </a>
    <a href="{{ route('partenaires.index') }}" target="_blank" class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
        <p class="text-sm font-medium text-gray-500">{{ __('admin.site') }}</p>
        <p class="text-[#C41E3A] font-medium mt-2">Voir la page Partenaires →</p>
    </a>
</div>
<p class="mt-8 text-gray-500">Bienvenue dans l'espace d'administration. Utilisez le menu pour gérer les partenaires et les secteurs.</p>
@endsection
