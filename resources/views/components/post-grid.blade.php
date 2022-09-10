@props(['posts'])

<x-featured_post :post="$posts[0]" />

<div class="lg:grid lg:grid-cols-6">
    @foreach($posts->skip(1) as $post)
        <x-post_card :post="$post" class="{{ $loop -> iteration < 3 ? 'col-span-3' : 'col-span-2' }}" />
    @endforeach
</div>