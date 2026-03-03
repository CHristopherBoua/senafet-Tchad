@php
    $currentLocale = app()->getLocale();
    $otherLocale = $currentLocale === 'fr' ? 'ar' : 'fr';
    $currentLabel = $currentLocale === 'fr' ? 'FR' : 'العربية';
    $otherLabel = $otherLocale === 'fr' ? 'FR' : 'العربية';
@endphp
<a href="{{ route('locale.switch', $otherLocale) }}" class="px-3 py-1.5 rounded-lg text-sm font-medium text-[#333] hover:bg-[#F5F5F5] hover:text-[#C41E3A] transition" title="{{ $otherLocale === 'fr' ? 'Français' : 'العربية' }}">
    {{ $otherLabel }}
</a>
