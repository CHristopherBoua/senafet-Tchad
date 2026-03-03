@extends('admin.layout')

@section('content')
<div class="max-w-xl">
    <form action="{{ route('admin.carousel.update', $slide) }}" method="post" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Type *</label>
            <select name="type" id="type" required class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                <option value="image" {{ old('type', $slide->type) === 'image' ? 'selected' : '' }}>Image</option>
                <option value="video" {{ old('type', $slide->type) === 'video' ? 'selected' : '' }}>Vidéo</option>
            </select>
        </div>
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre (overlay)</label>
            <input type="text" name="title" id="title" value="{{ old('title', $slide->title) }}" placeholder="Optionnel"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            @error('title')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="subtitle" class="block text-sm font-medium text-gray-700 mb-1">Sous-titre (overlay)</label>
            <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $slide->subtitle) }}" placeholder="Optionnel"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            @error('subtitle')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div id="field-image">
            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image (remplacer)</label>
            @if($slide->image_path)
                <p class="text-sm text-gray-600 mb-1">Actuel : <img src="{{ asset('storage/'.$slide->image_path) }}" alt="" class="inline-block w-24 h-14 object-cover rounded border"></p>
            @endif
            <input type="file" name="image" id="image" accept="image/*"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            <p class="text-xs text-gray-500 mt-1">Laisser vide pour conserver l'image actuelle.</p>
            @error('image')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div id="field-video" class="{{ $slide->type === 'video' ? '' : 'hidden' }} space-y-3">
            <div>
                <label for="video" class="block text-sm font-medium text-gray-700 mb-1">Fichier vidéo</label>
                @if($slide->video_path)
                    <p class="text-sm text-gray-600 mb-1">Actuel : vidéo uploadée.</p>
                @endif
                <input type="file" name="video" id="video" accept="video/mp4,video/quicktime,video/webm"
                       class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                <p class="text-xs text-gray-500 mt-1">MP4, MOV, WebM. Max 100 Mo. Laisser vide pour conserver.</p>
                @error('video')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
            <p class="text-xs text-gray-400">— ou —</p>
            <div>
                <label for="video_url" class="block text-sm font-medium text-gray-700 mb-1">URL de la vidéo</label>
                <input type="url" name="video_url" id="video_url" value="{{ old('video_url', $slide->video_url) }}" placeholder="https://..."
                       class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
                <p class="text-xs text-gray-500 mt-1">Lien direct (si vous n’uploadez pas).</p>
                @error('video_url')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
        </div>
        <div>
            <label for="link_url" class="block text-sm font-medium text-gray-700 mb-1">Lien (bouton optionnel)</label>
            <input type="url" name="link_url" id="link_url" value="{{ old('link_url', $slide->link_url) }}" placeholder="https://..."
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
        </div>
        <div>
            <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-1">{{ __('admin.sort_order') }}</label>
            <input type="number" name="sort_order" id="sort_order" min="0" value="{{ old('sort_order', $slide->sort_order) }}"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $slide->is_active) ? 'checked' : '' }}
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
    document.getElementById('field-video').classList.toggle('hidden', this.value !== 'video');
});
</script>
@endsection
