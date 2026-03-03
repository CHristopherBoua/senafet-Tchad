@extends('admin.layout')

@section('content')
<div class="max-w-xl">
    <form action="{{ route('admin.home-video-section.update') }}" method="post" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
            <input type="text" name="title" id="title" value="{{ old('title', $section->title) }}" placeholder="Laissez vide pour utiliser le texte par défaut"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            @error('title')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="subtitle" class="block text-sm font-medium text-gray-700 mb-1">Sous-titre</label>
            <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $section->subtitle) }}" placeholder="Optionnel"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            @error('subtitle')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="cta_text" class="block text-sm font-medium text-gray-700 mb-1">Texte du bouton (CTA)</label>
            <input type="text" name="cta_text" id="cta_text" value="{{ old('cta_text', $section->cta_text) }}" placeholder="Optionnel"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            @error('cta_text')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="cta_url" class="block text-sm font-medium text-gray-700 mb-1">Lien du bouton (URL)</label>
            <input type="text" name="cta_url" id="cta_url" value="{{ old('cta_url', $section->cta_url) }}" placeholder="/infos/programme ou https://..."
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            @error('cta_url')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="video" class="block text-sm font-medium text-gray-700 mb-1">Vidéo (remplacer)</label>
            @if($section->video_path)
                <p class="text-sm text-gray-600 mb-1">Actuelle : fichier enregistré.</p>
            @endif
            <input type="file" name="video" id="video" accept="video/mp4,video/webm,video/quicktime"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            <p class="text-xs text-gray-500 mt-1">MP4, WebM ou MOV. Laisser vide pour conserver la vidéo actuelle.</p>
            @error('video')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="poster" class="block text-sm font-medium text-gray-700 mb-1">Image de couverture (poster)</label>
            @if($section->poster_path)
                <p class="text-sm text-gray-600 mb-1">Actuel : <img src="{{ asset('storage/'.$section->poster_path) }}" alt="" class="inline-block w-24 h-14 object-cover rounded border"></p>
            @endif
            <input type="file" name="poster" id="poster" accept="image/*"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-[#C41E3A]/30 focus:border-[#C41E3A]">
            <p class="text-xs text-gray-500 mt-1">Laisser vide pour conserver l'image actuelle.</p>
            @error('poster')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $section->is_active) ? 'checked' : '' }}
                   class="rounded border-gray-300 text-[#C41E3A] focus:ring-[#C41E3A]">
            <label for="is_active" class="text-sm text-gray-700">{{ __('admin.published') }}</label>
        </div>
        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2 bg-[#C41E3A] text-white rounded-lg hover:bg-[#a0192f] transition">Enregistrer</button>
            <a href="{{ route('admin.dashboard') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Annuler</a>
        </div>
    </form>
</div>
@endsection
