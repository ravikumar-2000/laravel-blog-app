<x-layout>
    <section class="px-6 py-8">
        @include('_header')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if ($posts -> count())
                <x-post-grid :posts="$posts" />
            @else
                <p class="text-center">No post is available right now</p>
            @endif
        </main>
    </section>
</x-layout>