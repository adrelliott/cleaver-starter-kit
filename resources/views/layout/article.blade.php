@include('partials.common.head')
@include('partials.common.nav')

<div class="container mx-auto py-6 md:py-12">
    <main class="px-6 md:px-0 mx-auto prose md:prose-lg lg:prose-xl prose-slate">
        {!! $body !!}
    </main>
</div>

@include('partials.common.footer')

