@extends('admin.layout')

@section('content')
<div class="max-w-xl">
    <form action="{{ route('admin.carousel.store') }}" method="post" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Type *</label>
            <select name="type" id="type" required class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                <option value="image" {{ old('type') === 'image' ? 'selected' : '' }}>Image</option>
                <option value="video" {{ old('type') === 'video' ? 'selected' : '' }}>Vidéo</option>
            </select>
        </div>
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre (overlay)</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Optionnel"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            @error('title')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="subtitle" class="block text-sm font-medium text-gray-700 mb-1">Sous-titre (overlay)</label>
            <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle') }}" placeholder="Optionnel"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            @error('subtitle')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div id="field-image">
            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image * (slide image ou poster vidéo)</label>
            <input type="file" name="image" id="image" accept="image/*"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            <p class="text-xs text-gray-500 mt-1">JPG, PNG. Max 10 Mo. Obligatoire pour type Image ; recommandé pour Vidéo (poster).</p>
            @error('image')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div id="field-video" class="hidden space-y-3">
            <div>
                <label for="video" class="block text-sm font-medium text-gray-700 mb-1">Fichier vidéo</label>
                <input type="file" name="video" id="video" accept="video/mp4,video/quicktime,video/webm"
                       class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                <p class="text-xs text-gray-500 mt-1">MP4, MOV, WebM. Max 100 Mo.</p>
                @error('video')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <p class="text-xs text-gray-400">— ou —</p>
            <div>
                <label for="video_url" class="block text-sm font-medium text-gray-700 mb-1">URL de la vidéo</label>
                <input type="url" name="video_url" id="video_url" value="{{ old('video_url') }}" placeholder="https://..."
                       class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                <p class="text-xs text-gray-500 mt-1">Lien direct vers un fichier MP4 ou une vidéo en ligne (si vous n’uploadez pas).</p>
                @error('video_url')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
        </div>
        <div>
            <label for="link_url" class="block text-sm font-medium text-gray-700 mb-1">Lien (bouton optionnel)</label>
            <input type="url" name="link_url" id="link_url" value="{{ old('link_url') }}" placeholder="https://..."
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
        </div>
        <div>
            <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-1">{{ __('admin.sort_order') }}</label>
            <input type="number" name="sort_order" id="sort_order" min="0" value="{{ old('sort_order', 0) }}"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                   class="rounded border-gray-300 text-[#C41E3A] focus:ring-[#C41E3A]">
            <label for="is_active" class="text-sm text-gray-700">{{ __('admin.published') }}</label>
        </div>
        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2 bg-[#C41E3A] text-white rounded-lg hover:bg-[#a0192f] transition">Enregistrer</button>
            <a href="{{ route('admin.carousel.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Annuler</a>
        </div>
    </form>
</div>
<script>
document.getElementById('type').addEventListener('change', function() {
    var isVideo = this.value === 'video';
    document.getElementById('field-image').classList.toggle('hidden', false);
    document.getElementById('field-video').classList.toggle('hidden', !isVideo);
});
document.getElementById('type').dispatchEvent(new Event('change'));
</script>
@endsection
