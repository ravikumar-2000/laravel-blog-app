<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/">
            <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
    </div>

    <div class="mt-8 md:mt-0">
        @guest
            <a href="/register" class="text-xs font-bold uppercase">Register</a>
            <a href="/login" class="text-xs font-bold uppercase ml-4">LogIn</a>
        @else
            <span>Welcome {{ auth() -> user() -> name }}</span>
            <a href="/logout" class="text-xs font-bold uppercase ml-4">LogOut</a>
        @endguest
        

        <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Subscribe for Updates
        </a>
    </div>
</nav>

<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg" alt="Head of Lary the mascot"></h2>

    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>


    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <!--  Category -->
            <x-category-dropdown />
        </div>

        <!-- Other Filters -->
        <!-- <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </div> -->

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/?{{ request()->getQueryString() }}">
                @if(request('category'))
                <input type='hidden' name='category' value="{{ request('category') }}"/>
                @endif
                <input 
                type="text" 
                name="search" 
                placeholder="Find something" 
                class="bg-transparent placeholder-black font-semibold text-sm"
                value="{{ request('search') }}"
                >
            </form>
        </div>
    </div>
</header>