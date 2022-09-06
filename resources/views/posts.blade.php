<x-layout>
    <x-slot name='mainHeading'>
        POSTS
    </x-slot>
    <x-slot name='content'>
        @foreach($posts as $post)
        <div>
            <article>
                <h4>
                    Written by <a href="/user/{{ $post -> user -> username }}">{{ $post -> user -> name }}</a> under category
                    <a href="/categories/{{ $post -> category -> id }}">{{ $post -> category -> category_name }}</a>
                </h4>
                <h1><a href="/post/{{ $post -> id }}">{{ $post -> title }}</a></h1>
                {!! $post -> body !!}
            </article>
        </div>
        <hr/>
        @endforeach
    </x-slot>
</x-layout>