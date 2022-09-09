<x-layout>


        <section class="px-6 py-8">
            @include('_header')
            <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
                <x-featured_post :post="$posts[0]"/>
                

                <div class="lg:grid lg:grid-cols-2">
                    @foreach($posts->skip(1) as $post)
                        <x-post_card :post="$post"/>
                    @endforeach
                </div>

            </main>

            <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
                <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
                <h5 class="text-3xl">Stay in touch with the latest posts</h5>
                <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

                <div class="mt-10">
                    <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                        <form method="POST" action="#" class="lg:flex text-sm">
                            <div class="lg:py-3 lg:px-5 flex items-center">
                                <label for="email" class="hidden lg:inline-block">
                                    <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                                </label>

                                <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                            </div>

                            <button type="submit" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </footer>
        </section>

        <!-- @foreach($posts as $post)
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
        @endforeach -->

</x-layout>