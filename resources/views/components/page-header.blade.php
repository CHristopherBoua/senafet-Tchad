@props([
    'title',
    'subtitle' => null,
    'centered' => true,
])

<section class="bg-[#9B2363] py-20 mb-12 w-screen relative left-1/2 -translate-x-1/2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        @if (isset($breadcrumbs))
            <nav class="mb-4" aria-label="{{ __('Breadcrumb') }}">
                <ol class="flex flex-wrap items-center justify-center gap-x-2 gap-y-1 text-sm text-white/90">
                    {{ $breadcrumbs }}
                </ol>
            </nav>
        @endif

        <h1 class="text-4xl font-bold text-white mb-4">
            {{ $title }}
        </h1>

        @if ($subtitle)
            <p class="text-lg text-white mb-8">
                {!! $subtitle !!}
            </p>
        @endif

        @if (isset($actions))
            <div class="flex flex-wrap justify-center gap-3">
                {{ $actions }}
            </div>
        @endif
    </div>
</section>
