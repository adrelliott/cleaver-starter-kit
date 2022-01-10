@include('partials.common.head')
@include('partials.common.nav')

<div class="container mx-auto py-6 md:py-12">
        <main class="px-6 md:px-0">
            @forelse($sections as $section)
                <section class="text-gray-700 leading-relaxed mb-12" id="{{ $section->slug ?? '' }}">
                    @include('partials.' . $section->path)
                </section>
            @empty
                <code>Define some partials</code>
            @endforelse
        </main>
    </div>
</div>

@include('partials.common.footer')
