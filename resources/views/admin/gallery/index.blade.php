@extends('admin.layout')

@section('content')
<div class="flex justify-end mb-4">
    <a href="{{ route('admin.gallery.create') }}" class="px-4 py-2 bg-[#9B2363] text-white rounded-lg hover:bg-[#7C1C4F] transition">{{ __('admin.gallery_add') }}</a>
</div>
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aperçu</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">{{ __('admin.name') }}</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">{{ __('admin.sort_order') }}</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($media as $item)
            <tr>
                <td class="px-6 py-4">
                    @if($item->image_path)
                        <img src="{{ asset('storage/'.$item->image_path) }}" alt="" class="w-20 h-14 object-cover rounded border border-gray-200">
                    @else
                        <span class="text-xs text-gray-400">—</span>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <p class="text-sm font-medium text-gray-800">{{ $item->title ?: '—' }}</p>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $item->sort_order }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    @if($item->is_active)
                        <span class="text-xs text-green-600 font-medium">{{ __('admin.published') }}</span>
                    @else
                        <span class="text-xs text-gray-400">{{ __('admin.unpublished') }}</span>
                    @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right">
                    <a href="{{ route('admin.gallery.edit', $item) }}" class="text-[#9B2363] hover:underline text-sm mr-4">Modifier</a>
                    <form action="{{ route('admin.gallery.destroy', $item) }}" method="post" class="inline" onsubmit="return confirm('Supprimer cette image ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline text-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-8 text-center text-gray-500">Aucune image. <a href="{{ route('admin.gallery.create') }}" class="text-[#9B2363] hover:underline">En ajouter</a>.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
