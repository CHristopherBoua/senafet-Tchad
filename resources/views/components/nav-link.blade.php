@props(['href' => '#'])
<a href="{{ $href }}" {{ $attributes->merge(['class' => 'px-4 py-2 text-[#333] hover:text-[#C41E3A] font-medium rounded-lg hover:bg-[#F5F5F5] transition']) }}>
    {{ $slot }}
</a>
