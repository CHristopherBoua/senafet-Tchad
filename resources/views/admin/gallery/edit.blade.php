@extends('admin.layout')

@section('content')
<div class="max-w-xl">
    <form action="{{ route('admin.gallery.update', $media) }}" method="post" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">{{ __('admin.name') }}</label>
            <input type="text" name="title" id="title" value="{{ old('title', $media->title) }}" placeholder="Légende ou description (optionnel)"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#9B2363]/30 focus:border-[#9B2363]">
            @error('title')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image (remplacer)</label>
            @if($media->image_path)
                <p class="text-sm text-gray-600 mb-1">Actuel : <img src="{{ asset('storage/'.$media->image_path) }}" alt="" class="inline-block w-24 h-16 object-cover rounded border"></p>
            @endif
            <input type="file" name="image" id="image" accept="image/*"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#9B2363]/30 focus:border-[#9B2363]">
            <p class="text-xs text-gray-500 mt-1">Laisser vide pour conserver l'image actuelle.</p>
            @error('image')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-1">{{ __('admin.sort_order') }}</label>
            <input type="number" name="sort_order" id="sort_order" min="0" value="{{ old('sort_order', $media->sort_order) }}"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#9B2363]/30 focus:border-[#9B2363]">
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $media->is_active) ? 'checked' : '' }}
                   class="rounded border-gray-300 text-[#9B2363] focus:ring-[#9B2363]">
            <label for="is_active" class="text-sm text-gray-700">{{ __('admin.published') }}</label>
        </div>
        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2 bg-[#9B2363] text-white rounded-lg hover:bg-[#7C1C4F] transition">Enregistrer</button>
            <a href="{{ route('admin.gallery.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Annuler</a>
        </div>
    </form>
</div>
@endsection
