<x-layout>
    <x-slot name='mainHeading'>
        POST
    </x-slot>
    <x-slot name='content'>
        <div>
            <article>
                <h1>{{ $post -> title }}</h1>
                {!! $post -> body !!}
            </article>
        </div>
    </x-slot>
</x-layout>