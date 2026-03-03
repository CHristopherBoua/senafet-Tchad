@extends('admin.layout')

@section('content')
<div class="max-w-xl">
    <form action="{{ route('admin.sectors.store') }}" method="post" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">{{ __('admin.name') }} *</label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            @error('name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">{{ __('admin.slug') }}</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]" placeholder="optionnel, généré depuis le nom">
            @error('slug')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-1">{{ __('admin.sort_order') }}</label>
            <input type="number" name="sort_order" id="sort_order" min="0" value="{{ old('sort_order', 0) }}"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
        </div>
        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2 bg-[#C41E3A] text-white rounded-lg hover:bg-[#a0192f] transition">Enregistrer</button>
            <a href="{{ route('admin.sectors.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Annuler</a>
        </div>
    </form>
</div>
@endsection
