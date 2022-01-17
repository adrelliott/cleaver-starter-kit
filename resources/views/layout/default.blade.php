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

<div class="prose"> 
    <h3>Test if Alpine is working:</h3>
    <div x-data="{ count: 0 }">
        <button x-on:click="count++" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded ml-8">Click this button and see the count go up</button>
        COUNT:<span x-text="count"></span>
    </div>
</div>

@include('partials.common.footer')