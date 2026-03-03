@extends('admin.layout')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">{{ __('partenaires.company') }}</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">{{ __('partenaires.level') }}</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">{{ __('partenaires.sector') }}</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">{{ __('admin.published') }}</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($partenaires as $p)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $p->company }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ __("partenaires.{$p->level}") }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $p->sector?->name ?? '—' }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    @if($p->is_published)
                        <span class="text-green-600 text-sm">{{ __('admin.published') }}</span>
                    @else
                        <span class="text-gray-400 text-sm">{{ __('admin.unpublished') }}</span>
                    @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right">
                    <form action="{{ route('admin.partenaires.update', $p) }}" method="post" class="inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="text-[#C41E3A] hover:underline text-sm">{{ __('admin.toggle_publish') }}</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-8 text-center text-gray-500">Aucun partenaire pour le moment.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
